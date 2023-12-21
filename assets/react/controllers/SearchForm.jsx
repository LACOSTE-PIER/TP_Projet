import React, { useState } from 'react';
import axios from 'axios';

function SearchForm() {
    const [searchTerm, setSearchTerm] = useState('');
    const [results, setResults] = useState([]);

    const handleInputChange = (event) => {
        setSearchTerm(event.target.value);
    };
    
    const handleSearch = async (event) => {
        event.preventDefault();
        try {
            //Envoi de la requête avec le terme de recherche
            const response = await axios.get(`/api/search`, {
                params: { nom: searchTerm }
            });

            if (response.status !== 200) {
                throw new Error(`Erreur: ${response.statusText}`);
            }

            setResults(response.data);
            
        } catch (error) {
            console.error("Erreur lors de la récupération des données", error);
        }
    };

    return (
        <>
            <form onSubmit={handleSearch}>
                <input
                    type="text"
                    value={searchTerm}
                    onChange={handleInputChange}
                    placeholder="Rechercher par nom"
                />
                <button type="submit">Rechercher</button>
            </form>

            <div>
                {results.length > 0 ? (
                    <ul>
                        {results.map((habitant, index) => (
                            <li key={index}>{habitant.nom}, {habitant.prenom}</li>
                        ))}
                    </ul>
                ) : (
                    <p>Aucun résultat trouvé</p>
                )}
            </div>
        </>
    );
}

export default SearchForm;
