import {
    copyFileSync,
    mkdirSync,
    readdirSync,
    readFileSync,
    statSync,
    writeFileSync,
} from 'node:fs';
import { dirname, join, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';

const root = resolve(dirname(fileURLToPath(import.meta.url)), '..');
const viewPath = join(root, 'resources', 'views', 'web_sekolah.blade.php');
const outputPath = join(root, '_site');
const imageSource = join(root, 'public', 'images');
const imageOutput = join(outputPath, 'images');

if (statSync(viewPath, { throwIfNoEntry: false })?.isFile() !== true) {
    throw new Error(`Homepage view not found: ${viewPath}`);
}

if (statSync(imageSource, { throwIfNoEntry: false })?.isDirectory() !== true) {
    throw new Error(`Public images directory not found: ${imageSource}`);
}

const html = readFileSync(viewPath, 'utf8')
    .replace(/\{\{--.*?--\}\}/gs, '')
    .replace(/\/images\//g, 'images/')
    .replace('<html lang="en">', '<html lang="id">')
    .replace(/[ \t]+$/gm, '');

mkdirSync(outputPath, { recursive: true });
writeFileSync(join(outputPath, 'index.html'), html);
mkdirSync(imageOutput, { recursive: true });

for (const name of readdirSync(imageSource)) {
    const sourcePath = join(imageSource, name);

    if (statSync(sourcePath).isFile()) {
        copyFileSync(sourcePath, join(imageOutput, name));
    }
}
