import React from 'react';
import ReactDOM from 'react-dom';

function User() {
    return (
        <div className="container mt-5">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card text-center">
                        <div className="card-header">
                            <h3>React Component In Laravel</h3>
                        </div>
                        <div className="card-body">
                            Is for fun!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default User;

// DOM Element

if (document.getElementById('user')) {
    ReactDOM.render(<User />, document.getElementById('user'));
}



