var fs = require('fs'),
path = require('path');

module.exports = function (directory, fileType, callback) {
    fs.readdir(directory, function (err, files) {
        if (err) {
            return callback(err);
        } else {
            var data = [];
            files.forEach((file) => {
                if (path.extname(file) === '.' + fileType) {
                    data.push(file);
                }
            });
            return callback(null, data);
        }
    });
}