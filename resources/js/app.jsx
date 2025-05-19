import React, { Fragment } from 'react';
import ReactDOM from 'react-dom/client';
import Header from './components/Header';
import Insights from './components/Insights';
const App = () => {
    return (
        <Fragment>
            <Header/>
            <Insights/>
        </Fragment>
    );
};

const root = ReactDOM.createRoot(document.getElementById('react-root'));
root.render(<App />);
