//Producing Promise
const download = () => {
    return new Promise ((resolve) => {
        resolve(`Download selesai`);
    });
}

const showDownload = () => {
    const result = "Windows-10.exe"
    return new Promise ((resolve) => {
        setTimeout(() => {
            resolve(`Hasil Download : ${result}`);
        }, 3000);
    });
}

//Consuming async await
const main = async () => {
    console.log(await download());
    console.log(await showDownload());
}

main();