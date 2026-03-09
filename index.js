import imagemin from 'imagemin';
import imageminWebp from 'imagemin-webp';

await imagemin(['images/*.{jpg,png}'], {
	destination: 'images/webp',
	plugins: [
		imageminWebp({quality: 50})
	]
});

console.log('Images optimized');