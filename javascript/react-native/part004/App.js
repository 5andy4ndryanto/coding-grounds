import React, { useState } from 'react';
import { StyleSheet, Text, View, ScrollView, TouchableOpacity, FlatList} from 'react-native';

export default function App() {

  const [people, setPeople] = useState([
    { name : 'shaun', id: 1 },
    { name : 'yoshi', id: 2 },
    { name : 'mario', id: 3 },
    { name : 'luigi', id: 4 },
    { name : 'peach', id: 5 },
    { name : 'toad', id: 6 },
    { name : 'bowser', id: 7 }
  ])

  const pressHandler = (id) => {
     console.log(id);
     setPeople((prevPeople) => {
        return prevPeople.filter(person => person.id != id);
     });
  }


  return (
    <View style={styles.container}>
      {/* <ScrollView>
        { people.map((item) => {
              return (
                <View key={item.key}>
                    <Text style={styles.item}>{item.name}</Text>
                </View>
              )
          }) }
      </ScrollView> */}

      <FlatList 
        numColumns={2}
        keyExtractor={(item) => item.id}
        data={people}
        renderItem={({item}) => (
          <TouchableOpacity onPress={() => pressHandler(item.id)}>
             <Text style={styles.item}>{item.name}</Text>
          </TouchableOpacity>
        )}
      />


    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    paddingTop: 40,
    paddingHorizontal: 20
  },
  item: {
    marginTop: 24,
    padding:30,
    backgroundColor: 'pink',
    fontSize: 24,
    marginHorizontal: 10,
    marginTop: 24
  }
});
