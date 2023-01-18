import React from 'react';
import ReactDOM from 'react-dom/client';
import Table from './Cars/Table';
function App() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Lati Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
                <Table/>
            </div>
        </div>
    );
}

export default App;
