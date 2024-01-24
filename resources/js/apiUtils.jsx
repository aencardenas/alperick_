const fetchDataFromDatabase = async (category) => {
    try {
      const response = await fetch('https://alp.alperick.com/api/images');
      const data = await response.json();
      return data;
    } catch (error) {
      console.error('Error fetching data:', error);
      return [];
    }
  };
  
  export default fetchDataFromDatabase;