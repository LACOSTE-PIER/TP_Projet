// import './styles/app.css'
import React from 'react';
import ReactDOM from 'react-dom/client';
import SearchForm from './react/controllers/SearchForm.jsx';


const rootElement = document.getElementById('SearchForm');
if (rootElement) {
    const root = ReactDOM.createRoot(rootElement);

    root.render(
        <React.StrictMode>
            <SearchForm />
        </React.StrictMode>
    );
}