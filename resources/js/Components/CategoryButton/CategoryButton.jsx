import '@/Components/CategoryButton/CategoryButton.css'

const CategoryButton = ({text, onClick, isSelected}) => {

    return (
        <button onClick={onClick} className={`category-button ${isSelected ? 'selected' : ''}`}>{text}</button>
    );

}

export default CategoryButton;