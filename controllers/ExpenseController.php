<?php
class ExpenseController extends Controller {
    public function index() {
        $model = $this->loadModel('Expense');
        $expenses = $model->getAll();
        $this->loadView('expenses/index', ['expenses' => $expenses]);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model = $this->loadModel('Expense');
            $model->add($_POST['title'], $_POST['amount']);
            header('Location: /public_html');
        } else {
            $this->loadView('expenses/add');
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model = $this->loadModel('Expense');
            $model->edit($_POST['title'], $_POST['amount']);
            header('Location: /public_html');
        } else {
            $model = $this->loadModel('Expense');
            $expense = $model->get($id);
            $this->loadView('expenses/edit', ['expense' => $expense]);
        }

        header('Location: /public_html');
    }

    public function delete($id) {
        $model = $this->loadModel('Expense');
        $model->delete($id);
        header('Location: /public_html');
    }
}
?>