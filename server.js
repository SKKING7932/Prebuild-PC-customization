const express = require('express');
const fs = require('fs').promises;
const app = express();
const port = 3000;

app.use(express.json());

app.post('/updateData', async (req, res) => {
  try {
    const jsonData = req.body;
    const currentData = await fs.readFile('members.json');
    const parsedData = JSON.parse(currentData);
    // Update or insert logic based on your requirements
    parsedData.push(jsonData); // For simplicity, just push the data to the array
    await fs.writeFile('data.json', JSON.stringify(parsedData, null, 2));
    res.sendStatus(200); // Success response
  } catch (error) {
    console.error('Error:', error);
    res.sendStatus(500); // Internal server error
  }
});

app.listen(port, () => {
  console.log(`Server is listening at http://localhost:${port}`);
});
