//generally used however exist only in the background
const TesterName = document.getElementById('tester');

//Mainly used in NewPatient.html;
const name = document.getElementById('name');
const username = document.getElementById('user');
const password = document.getElementById('pass');
const patientType = document.getElementById('PatientType');
const symptoms = document.getElementById('symptom');
const submitBTN = document.getElementById('submit');
const dateTest = document.getElementById('datetime');
var pending = "Pending";

//Mainly used in UpdateResult;
const testID = document.getElementById('testID');
const result = document.getElementById('result');
const updateBTN = document.getElementById('update');
const dateResult = document.getElementById('datetime');


const database = firebase.database();
const rootRef = database.ref('TestID');


submitBTN.addEventListener('click', (e) => {
    e.preventDefault();

    const autoID = rootRef.push().key;
    rootRef.child(autoID).set({
        name: name.value,
        username: username.value,
        password: password.value,
        patientType: patientType.value,
        symptoms: symptoms.value
        //result: pending.value, //still problem
        //dateTest: datetime.value,
        //TesterName: tester.value
    })
});

/*var dbRef = firebase.database().ref().child('someChild');
dbRef.on('child_added', function (snap) {
    var res = snap.val().theValueYouNeed;
});

someChild: {
    theValueYouNeed: "some value"
}
*/
/*updateBTN.addEventListener('click', (e) => {
    e.preventDefault();
    /*const newData({
        name: name.value,
        username: username.value,
        password: password.value,
        patientType: patientType.value,
        symptoms: symptoms.value,
    })

    const update{ };
    update
});
    */


//enquiring the firebase for username based on name
/*rootRef.orderByChild('name').on('value'.snapshot => {
    console.log(snapshot.val());
});
*/