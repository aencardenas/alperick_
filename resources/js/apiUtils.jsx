const fetchDataFromDatabase = async (category) => {
    try {
      const response = await fetch('http://localhost:8000/api/images');
      const data = await response.json();
      return data;
    } catch (error) {
      console.error('Error fetching data:', error);
      return [];
    }
  };
  
  export default fetchDataFromDatabase;