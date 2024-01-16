import React from 'react';
import Slider from 'react-slick';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import '@/Components/HorizontalCarousel/HorizontalCarousel.css'; // Importa tus estilos personalizados si los tienes

const HorizontalCarousel = ({ photos }) => {
  const settings = {
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
  };

  return (
    <div className="horizontal-carousel">
      <Slider {...settings}>
        {photos.map((photo, index) => (
          <div key={index}>
            <img
              className="horizontal-photos"
              src={photo.file_path}
              alt={`Photo ${index}`}
            />
          </div>
        ))}
      </Slider>
    </div>
  );
};

export default HorizontalCarousel;
