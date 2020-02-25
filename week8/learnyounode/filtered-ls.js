const fs = require('fs');
fs.readdir(process.argv[2], { encoding: 'utf-8' }, function callback(err, files) {
    if (err) {
        console.error(err);
    } else {
        files.forEach(file => {
            if (file.includes(`.${process.argv[3]}`)) {
                console.log(file);
            }
        });
    }
});

// "." + process.argv[3]; 