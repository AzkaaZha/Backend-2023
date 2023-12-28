//import model
const Student = require('../models/Student');

class StudentController {
    async index(req, res) {
        const students = await Student.all();

        const data = {
            message : `Menampilkan Semua Student`,
            data : students
        };
        res.json(data);
    }

    async store (req, res) {
        const { nama, nim, email, jurusan } = req.body;
        const student = await Student.create({ nama, nim, email, jurusan });
        
        const data = {
            message : `Menambahkan Data Student`,
            data : []
        };

        res.json(data);
    }

    update (req, res) {
        const { id } = req.params.id;
        const { nama } = req.body;

        const data = {
            message : `Mengubah Data Student dengan id ${id}, nama ${nama}`,
            data : []
        };

        res.json(data);
    }

    destroy (req, res) {
        const { id } = req.params;

        const data = {
            message : `Menghapus Data Student dengan id ${id}`,
            data : []
        };

        res.json(data);
    }
}

const object = new StudentController();

module.exports = object;