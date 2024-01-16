import Header from "@/Components/Header/Header";
import CategoryButton from "@/Components/CategoryButton/CategoryButton";
import HorizontalCarousel from "@/Components/HorizontalCarousel/HorizontalCarousel";
import VerticalCarousel from "@/Components/VerticalCarousel/VerticalCarousel";
import Footer from "@/Components/Footer/Footer";
import { useMenu } from "@/Context/MenuContext";
import { useState, useEffect } from "react";
import fetchDataFromDatabase from "@/apiUtils";

const Chiapas = () => {

    const { showMenu } = useMenu();
    const [category, setCategory] = useState('CHIAPAS');
    const [organizedImages, setOrganizedImages] = useState({});
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        const fetchImages = async () => {
            try {
                const data = await fetchDataFromDatabase(category);
                setOrganizedImages(data);
            } catch (error) {
                console.error('Error fetching images:', error);
            } finally {
                setLoading(false);
            }
        };

        fetchImages();
    }, [category]);

    const handleCategoryChange = async (newCategory) => {
        setCategory(newCategory);
    };

    console.log(organizedImages)

    if (loading) {
        return <p>Cargando...</p>; // Puedes personalizar el mensaje de carga según tus necesidades
    }

    return (
        <div className={`events-container ${showMenu ? 'home-page' : ''}`}>
            <Header />

            <div className={`event-content ${showMenu ? 'hidden' : ''}`}>
                {/* Buttons to change the category */}
                <div className="category-buttons">
                    <CategoryButton text={'CHIAPAS'} onClick={() => handleCategoryChange('CHIAPAS')} isSelected={category === 'CHIAPAS'}/>
                   
                </div>

                {Object.keys(organizedImages).length > 0 && organizedImages[category] && (
                    <div className="carrousel-container">
                        <HorizontalCarousel photos={organizedImages[category].horizontal} />
                        <VerticalCarousel photos={organizedImages[category].vertical} />
                    </div>
                )}
            </div>
            {!showMenu && <Footer />}
        </div>
    )

}

export default Chiapas;