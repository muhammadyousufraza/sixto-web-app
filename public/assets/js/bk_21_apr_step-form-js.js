var currentTab = 0;

        // Current tab is set to be the first tab (0)
        // showTab(currentTab); // Display the current tab
        var x = document.getElementsByClassName("step");
        document.getElementById("nextBtn-1").style.display = 'none';
        document.getElementById("nextBtn-2").style.display = 'none';
        document.getElementById("nextBtn-3").style.display = 'none';
        document.getElementById("addMore").style.display = 'none';
        // document.getElementById("nextBtn-2").style.display = 'none';
        // document.getElementById("nextBtn-3").style.display = 'none';
        // document.getElementById("nextBtn-4").style.display = 'none';
        // document.getElementById("nextBtn-5").style.display = 'none';
        x[0].style.display = "block";
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == 1) {
            document.getElementById("addMore").style.display = "inline";
          } else {
            document.getElementById("addMore").style.display = "none";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }

        function nextBtn() {
          var x = document.getElementsByClassName("step");
          for(let i = x.length; i< x.length; i++ ){
            if(i == 1) {
              x[i].style.display = "none";
            }else{
              x[i].style.display = "none";
            }
          }
        }

        function nextPrev_0() {
                  var x = document.getElementsByClassName("step");
                  x[0].style.display = 'none'
                  x[1].style.display = 'block'
                  x[2].style.display = 'none'
                  x[3].style.display = 'none'
                  x[4].style.display = 'none'
                  x[5].style.display = 'none'
                  document.getElementById("nextBtn-1").style.display = 'block';
                  document.getElementById("nextBtn").style.display = 'none';
                  document.getElementById("addMore").style.display = 'block';
          }

        function nextPrev_1() {
          const getLocalStorage = JSON.parse(localStorage.getItem(window.location.href))
          var x = document.getElementsByClassName("step");
          getLocalStorage.legelRepresentative = document.getElementById('legel_representative_inputYes').checked ? document.getElementById('legel_representative_inputYes').checked : false
          getLocalStorage.manager = document.getElementById('inputManageYes').checked ? document.getElementById('inputManageYes').checked : false
         
            if(getLocalStorage && !getLocalStorage.legelRepresentative && getLocalStorage.manager && Number(document.getElementById('firstSharehoderPercentage').value == 100)) {
              x[0].style.display = 'none'
              x[1].style.display = 'none'
              x[2].style.display = 'none'
              x[3].style.display = 'none'
              x[4].style.display = 'block'
              x[5].style.display = 'none'
              document.getElementById("addMore").style.display = 'none';
              document.getElementById("nextBtn-1").innerHTML = "Submit";
            }
            if(getLocalStorage && getLocalStorage.legelRepresentative && !getLocalStorage.manager && Number(document.getElementById('firstSharehoderPercentage').value == 100)) {
              x[0].style.display = 'none'
              x[1].style.display = 'none'
              x[2].style.display = 'none'
              x[3].style.display = 'none'
              x[4].style.display = 'none'
              x[5].style.display = 'block'
              document.getElementById("addMore").style.display = 'none';
              document.getElementById("nextBtn-1").innerHTML = "Submit";
            }
            if(getLocalStorage && !getLocalStorage.legelRepresentative && !getLocalStorage.manager && Number(document.getElementById('firstSharehoderPercentage').value == 100)) {
              x[0].style.display = 'none'
              x[1].style.display = 'none'
              x[2].style.display = 'none'
              x[3].style.display = 'none'
              x[4].style.display = 'block'
              x[5].style.display = 'none'
              document.getElementById("nextBtn-2").style.display = 'block';
              document.getElementById("nextBtn-1").style.display = 'none';
              document.getElementById("nextBtn").style.display = 'none';
              document.getElementById("addMore").style.display = 'none';
            }
            
            if(getLocalStorage && getLocalStorage.legelRepresentative && getLocalStorage.manager && Number(document.getElementById('firstSharehoderPercentage').value == 100))  {
              localStorage.setItem(window.location.href,JSON.stringify(
                {...getLocalStorage,per: Number(document.getElementById('firstSharehoderPercentage').value)}
              ))
            }

            if(Number(document.getElementById('firstSharehoderPercentage').value == 100) 
              && !document.getElementById('inputManageYes').checked 
              && !document.getElementById('legel_representative_inputYes').checked ) {
                console.log(" ok ")
                x[0].style.display = 'none'
                x[1].style.display = 'none'
                x[2].style.display = 'none'
                x[3].style.display = 'none'
                x[4].style.display = 'block'
                x[5].style.display = 'none'
                document.getElementById("nextBtn-2").style.display = 'block';
                document.getElementById("nextBtn-1").style.display = 'none';
                document.getElementById("nextBtn").style.display = 'none';
                const a = {
                  firstName: document.getElementById('firstCompanyName').value ,
                  secondName: document.getElementById('secondCompanyName').value,
                  thirdName: document.getElementById('thirdCompanyName').value,
                  streetAddress: document.getElementById('inputaddress').value,
                  detailAddress: document.getElementById('inputaddress').value ,
                  city: document.getElementById('inputCity_select').value,
                  state: document.getElementById('inputState').value ,
                  code: document.getElementById('inputZip').value ,
                  packageId: 1
                }
                getLocalStorage.legelRepresentative = false;
                getLocalStorage.manager = false;
                getLocalStorage.data_.company = {...a}
                // getLocalStorage.data.push({...getLocalStorage.a,a})
                localStorage.setItem(window.location.href,JSON.stringify(getLocalStorage))
            }
        }

        function nextPrev_2() {
          const getLocalStorage = JSON.parse(localStorage.getItem(window.location.href))
          getLocalStorage.legelRepresentative = true;
          localStorage.setItem(window.location.href,JSON.stringify(getLocalStorage))
          x[0].style.display = 'none'
          x[1].style.display = 'none'
          x[2].style.display = 'none'
          x[3].style.display = 'none'
          x[4].style.display = 'none'
          x[5].style.display = 'block'
          document.getElementById("nextBtn-3").style.display = 'block';
          document.getElementById("nextBtn-2").style.display = 'none';
          document.getElementById("nextBtn-1").style.display = 'none';
          document.getElementById("nextBtn").style.display = 'none';
          document.getElementById("nextBtn-3").innerHTML = "Submit";
          const a = {
            firstName: document.getElementById('firstName').value ,
            secondName: document.getElementById('lastName').value,
            thirdName: document.getElementById('inputNationnal').value,
            streetAddress: document.getElementById('identification').value,
            detailAddress: document.getElementById('inputOccupation').value ,
            city: document.getElementById('inputMarried').value,
            state: document.getElementById('inputaddress').value,
            sharePercentage: 0,
            shareHolder: false,
            legalRepresentative: true,
            manager: false

          }
          getLocalStorage.legelRepresentative = true;
          getLocalStorage.data_.shareholder.push({...getLocalStorage.a,...a})
          localStorage.setItem(window.location.href,JSON.stringify(getLocalStorage))
          
        } 

        function selectPackage(pkg) {
          console.log(pkg)
        }

       

        function nextPrev_3() {
          
          const getLocalStorage = JSON.parse(localStorage.getItem(window.location.href))
          console.log("firstName",document.getElementById('firstName_manager'))
          console.log("firstName",document.getElementById('firstName_manager').value)
          const a = {
            firstName: document.getElementById('firstName_manager').value,
            secondName: document.getElementById('lastName').value,
            thirdName: document.getElementById('inputNationnal').value,
            streetAddress: document.getElementById('identification').value,
            detailAddress: document.getElementById('inputOccupation').value ,
            city: document.getElementById('inputMarried').value,
            state: document.getElementById('inputaddress').value,
            sharePercentage: 0,
            shareHolder: false,
            legalRepresentative: false,
            manager: true
          }
          getLocalStorage.manager = true;
          getLocalStorage.data_.shareholder.push({...getLocalStorage.a,...a})
          getLocalStorage.data_.user = {
            username: "Ali",
            email: "fdfdf555@a.com",
            password: "12345678",
            firstName: "first",
            middleName: "middle",
            surname: "sur",
            address: "address",
            contactNumber: "+9233"
          }
          localStorage.setItem(window.location.href,JSON.stringify(getLocalStorage))
          console.log("getLocalStorage",getLocalStorage.data_)
          // let fileInput_1 = document.getElementsByClassName('file_1');
          // let fileInput_2 = document.getElementsByClassName('file_2');
          // let fileInput_3 = document.getElementsByClassName('file_3');
          // let fileInput_4 = document.getElementsByClassName('file_4');
          // let fileInput_5 = document.getElementsByClassName('file_5');
          // console.log("fileInput_1",fileInput_1)
          // console.log(fileInput_1.files[0])
          // console.log(fileInput_2.files[0])
          // console.log(fileInput_3.files[0])
          // console.log(fileInput_4.files[0])
          // console.log(fileInput_5.files[0])
            // let form = document.getElementById('signUpForm');
            // let formData = new FormData(getLocalStorage.data_);
            // console.log("formData",formData)
            fetch('/index.php/create-company', {
              method: 'POST',
              body: JSON.stringify(getLocalStorage.data_),
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
              }
            })
            .then(response => response.json())
            .then(data => {
                uploadDocs();
                // getLocalStorage = ''
            })
            .catch(error => console.error('Error:', error));
        }

        function uploadFile() {
          let formData = new FormData();
          let fileInput_1 = document.getElementById('file_1');
          let fileInput_2 = document.getElementById('file_2');
          let fileInput_3 = document.getElementById('file_3');
          let fileInput_4 = document.getElementById('file_4');
          let fileInput_5 = document.getElementById('file_5');
          console.log(fileInput_1.files[0])
          console.log(fileInput_2.files[0])
          console.log(fileInput_3.files[0])
          console.log(fileInput_4.files[0])
          console.log(fileInput_5.files[0])
      
          // if (fileInput.files.length > 0) {
          //     formData.append('file', fileInput.files[0]);
      
          //     $.ajax({
          //         url: '/upload', // Change the URL to your Laravel route
          //         type: 'POST',
          //         data: formData,
          //         processData: false,
          //         contentType: false,
          //         success: function (response) {
          //             console.log('File uploaded successfully:', response);
          //             // Handle success response here
          //         },
          //         error: function (xhr, status, error) {
          //             console.error('Error uploading file:', error);
          //             // Handle error response here
          //         }
          //     });
          // } else {
          //     console.error('No file selected.');
          //     // Handle case where no file is selected
          // }
      }

        function addMoreFN() {
          const getLocalStorage = JSON.parse(localStorage.getItem(window.location.href))
          if(getLocalStorage 
            && Number(document.getElementById('firstSharehoderPercentage').value) < 100
              && (Number(document.getElementById('firstSharehoderPercentage').value) + Number(getLocalStorage.per)) < 100 ) {
                getLocalStorage.per = (Number(document.getElementById('firstSharehoderPercentage').value) + Number(getLocalStorage.per))
                getLocalStorage.legelRepresentative = document.getElementById('legel_representative_inputYes').checked ? document.getElementById('legel_representative_inputYes').checked : false
                getLocalStorage.manager = document.getElementById('inputManageYes').checked ? document.getElementById('inputManageYes').checked : false
                getLocalStorage.data.push({
                  name:''
                })
              localStorage.setItem(window.location.href,JSON.stringify(getLocalStorage))
              if(getLocalStorage.manager) {
                clearFieldsStackHolders()
                document.getElementById("manager-checkbox-heading").style.display = 'none'
                document.getElementById("manager-checkbox").style.display = 'none'
              }
              if(getLocalStorage.legelRepresentative) {
                clearFieldsStackHolders()
                document.getElementById("legel-checkbox-heading").style.display = 'none'
                document.getElementById("legel-checkbox").style.display = 'none'
              }
              if(getLocalStorage.legelRepresentative && getLocalStorage.legel  ) {
                clearFieldsStackHolders()
                document.getElementById("legel-checkbox").style.display = 'none'
                document.getElementById("manager-checkbox").style.display = 'none'
                document.getElementById("manager-checkbox-heading").style.display = 'none'
                document.getElementById("legel-checkbox-heading").style.display = 'none'
                
              }
          }  else {
            document.getElementById("nextBtn-1").innerHTML = "Submit";
            alert('100 all')
          }
        }

        function clearFieldsStackHolders() {
          document.getElementById('secondCompanyName').value = ''
          document.getElementById('thirdCompanyName').value = ''
          document.getElementById('firstShareholderFirstName').value = ''
          document.getElementById('firstShareholderLastName').value = ''
          document.getElementById('firstShareholderIdentification').value = ''
          document.getElementById('inputaddress').value = ''
          document.getElementById('inputaddress').value = ''
          document.getElementById('firstName1').value = ''
          document.getElementById('lastName1').value = ''
          document.getElementById('firstSharehoderPercentage').value = ''
          document.getElementById('inputCity_select').value = 0
          document.getElementById('inputOccupation').value = 0
          document.getElementById('inputMarried').value = 0
          
            //     // if(document.getElementById('secondCompanyName').value == '') {
        //     //   error = 1;
        //     //   alert('secondCompanyName please fill the field')
        //     // }
        //     // if(document.getElementById('thirdCompanyName').value == '') {
        //     //   error = 1;
        //     //   alert('thirdCompanyName please fill the field')
        //     // }
        //     // if(document.getElementById('firstShareholderFirstName').value == '') {
        //     //   error = 1;
        //     //   alert('firstShareholderFirstName please fill the field')
        //     // }
        //     // if(document.getElementById('firstShareholderLastName').value == '') {
        //     //   error = 1;
        //     //   alert('firstShareholderLastName please fill the field')
        //     // }
        //     // if(document.getElementById('firstShareholderIdentification').value == '') {
        //     //   error = 1;
        //     //   alert('firstShareholderIdentification please fill the field')
        //     // }
        //     // if(document.getElementById('inputaddress').value == '') {
        //     //   error = 1;
        //     //   alert('inputaddress please fill the field')
        //     // }
        //     // if(document.getElementById('firstName1').value == '') {
        //     //   error = 1;
        //     //   alert('firstName1 please fill the field')
        //     // }
        //     // if(document.getElementById('lastName1').value == '') {
        //     //   error = 1;
        //     //   alert('lastName1 please fill the field')
        //     // }
        //     // if(document.getElementById('firstSharehoderPercentage').value == '') {
        //     //   error = 1;
        //     //   alert('firstSharehoderPercentage please fill the field')
        //     // }
        //     // if(ddocument.getElementById('inputCity_select').value == 0) {
        //     //   error = 1;
        //     //   alert('inputCity_select please fill the field')
        //     // }
        //     // if(ddocument.getElementById('inputOccupation').value == 0) {
        //     //   error = 1;
        //     //   alert('inputOccupation please fill the field')
        //     // }
        //     // if(ddocument.getElementById('inputMarried').value == 0) {
        //     //   error = 1;
        //     //   alert('inputMarried please fill the field')
        //     // }
        //   }
        }
        

        // function nextPrev_5() {
        // if(document.getElementsByClassName('step-5')[0].style.display == 'block') {
        //           var x = document.getElementsByClassName("step");
        //           console.log("x",x)
        //           x[0].style.display = 'none'
        //           x[1].style.display = 'none'
        //           x[2].style.display = 'none'
        //           x[3].style.display = 'none'
        //           x[4].style.display = 'none'
        //           x[5].style.display = 'none'
        //           x[6].style.display = 'block'
        //           document.getElementsByClassName('step-2')[0].style.display == 'none'
        //   }
        // }
        
        // function nextPrev(n) {
        //   let error = 0
        //   const getLocalStorage = JSON.parse(localStorage.getItem(window.location.href))
        //   if(getLocalStorage && !getLocalStorage.legelRepresentative && getLocalStorage.manager && getLocalStorage.per == '0') {
        //     console.log("ok to 2")
        //     var x = document.getElementsByClassName("step");
        //     console.log(x)
        //       x[0].style.display = 'none'
        //       x[1].style.display = 'block'
        //       x[2].style.display = 'none'
        //       x[3].style.display = 'none'
        //       x[4].style.display = 'none'
        //       x[5].style.display = 'none'
        //   }

          
        //   if(document.getElementsByClassName('step-5')[0].style.display == 'block') {
        //           var x = document.getElementsByClassName("step");
        //           console.log("x",x)
        //           x[0].style.display = 'none'
        //           x[1].style.display = 'none'
        //           x[2].style.display = 'none'
        //           x[3].style.display = 'none'
        //           x[4].style.display = 'none'
        //           x[5].style.display = 'none'
        //           x[6].style.display = 'block'
        //           document.getElementsByClassName('step-2')[0].style.display == 'none'
        //   }
          
        //   if(document.getElementsByClassName('step-2')[0].style.display == 'block') {
        //     const getLocalStorage = JSON.parse(localStorage.getItem(window.location.href))
        //     let legelRepresentative = document.getElementById('legel_representative_inputYes').checked ? document.getElementById('legel_representative_inputYes').checked : false
        //     let manager = document.getElementById('inputManageYes').checked ? document.getElementById('inputManageYes').checked : false
        //     if(!legelRepresentative && !manager &&  document.getElementById('firstSharehoderPercentage').value == '100') {
        //       console.log("100 percent")
        //       var x = document.getElementsByClassName("step");
        //       x[0].style.display = 'none'
        //       x[1].style.display = 'none'
        //       x[2].style.display = 'none'
        //       x[3].style.display = 'none'
        //       x[4].style.display = 'block'
        //       x[5].style.display = 'none'
        //       if(getLocalStorage){
        //           getLocalStorage.push({
        //             legelRepresentative,
        //             manager,
        //             per: document.getElementById('firstSharehoderPercentage').value
        //           })
        //         }
        //       // document.getElementById("nextBtn-0").style.display = 'none';
        //       // document.getElementById("nextBtn-1").style.display = 'none';
        //       // document.getElementById("nextBtn-2").style.display = 'none';
        //       // document.getElementById("nextBtn-3").style.display = 'none';
        //       // document.getElementById("nextBtn-4").style.display = 'none';
        //       // document.getElementById("nextBtn-5").style.display = 'block';
        //       // document.getElementById("nextBtn-6").style.display = 'none';
        //     }
           
        //     // console.log(document.getElementById('legel_representative_inputYes').checked)
        //     // console.log(document.getElementById('legel_representative_inputNo').checked)
        //     // console.log(document.getElementById('inputManageYes').checked)
        //     // console.log(document.getElementById('inputManageNo').checked)
        //     // console.log(document.getElementById('firstSharehoderPercentage').value)
        //     // console.log("getLocalStorage",getLocalStorage)
        //     // let legelRepresentative = document.getElementById('legel_representative_inputYes').checked ? document.getElementById('legel_representative_inputYes').checked : false
        //     // let manager = document.getElementById('inputManageYes').checked ? document.getElementById('inputManageYes').checked : false
        //     // console.log("getLocalStorage",getLocalStorage)
        //     // error = 1
        //     // if(document.getElementById('firstCompanyName').value == '') {
        //     //   error = 1;
        //     //   alert('firstCompanyName please fill the field')
        //     // }
      

          

        // if(error == 0 ) {
        //   // This function will figure out which tab to display
        //   var x = document.getElementsByClassName("step");
        //   // Exit the function if any field in the current tab is invalid:
        //  // if (n == 1 && !validateForm()) return false;
        //   // Hide the current tab:
        //   x[currentTab].style.display = "none";
        //   // Increase or decrease the current tab by 1:
        //   currentTab = currentTab + n;
        //   // if you have reached the end of the form...
        //   if (currentTab >= x.length) {
        //     // ... the form gets submitted:
        //     document.getElementById("signUpForm").submit();
        //     return false;
        //   }
        //   // Otherwise, display the correct tab:
        //   // showTab(currentTab);
        //   }
        // }

        // function nextPrev() {
        //           var x = document.getElementsByClassName("step");
        //           x[0].style.display = 'none'
        //           x[1].style.display = 'block'
        //           x[2].style.display = 'none'
        //           x[3].style.display = 'none'
        //           x[4].style.display = 'none'
        //           x[5].style.display = 'none'
        //           document.getElementById("nextBtn").style.display = 'none';
        //           document.getElementById("nextBtn-1").style.display = 'block';
        //           document.getElementById("nextBtn-2").style.display = 'none';
        //           document.getElementById("nextBtn-3").style.display = 'none';
        //           document.getElementById("nextBtn-4").style.display = 'none';
        //           document.getElementById("nextBtn-5").style.display = 'none';
        // }

        // function nextPrev_1() {
        //   const getLocalStorage = JSON.parse(localStorage.getItem(window.location.href))
        //       let legelRepresentative = document.getElementById('legel_representative_inputYes').checked ? document.getElementById('legel_representative_inputYes').checked : false
        //       let manager = document.getElementById('inputManageYes').checked ? document.getElementById('inputManageYes').checked : false
        //       if(!legelRepresentative && !manager && document.getElementById('firstSharehoderPercentage').value == '100') {
        //         var x = document.getElementsByClassName("step");
        //         x[0].style.display = 'none'
        //         x[1].style.display = 'none'
        //         x[2].style.display = 'none'
        //         x[3].style.display = 'none'
        //         x[4].style.display = 'block'
        //         x[5].style.display = 'none'
        //         document.getElementById("nextBtn").style.display = 'none';
        //           document.getElementById("nextBtn-1").style.display = 'none';
        //           document.getElementById("nextBtn-2").style.display = 'none';
        //           document.getElementById("nextBtn-3").style.display = 'none';
        //           document.getElementById("nextBtn-4").style.display = 'block';
        //           document.getElementById("nextBtn-5").style.display = 'none';
        //         if(getLocalStorage){
        //             getLocalStorage.push({
        //               legelRepresentative,
        //               manager,
        //               per: document.getElementById('firstSharehoderPercentage').value
        //             })
        //           }
        //         }
        //       if(document.getElementById('firstSharehoderPercentage').value < '100') {

        //       }
        //       if(legelRepresentative && !manager && document.getElementById('firstSharehoderPercentage').value == '100') {
        //         var x = document.getElementsByClassName("step");
        //         x[0].style.display = 'none'
        //         x[1].style.display = 'none'
        //         x[2].style.display = 'none'
        //         x[3].style.display = 'none'
        //         x[4].style.display = 'block'
        //         x[5].style.display = 'none'
        //         document.getElementById("nextBtn").style.display = 'none';
        //           document.getElementById("nextBtn-1").style.display = 'none';
        //           document.getElementById("nextBtn-2").style.display = 'none';
        //           document.getElementById("nextBtn-3").style.display = 'none';
        //           document.getElementById("nextBtn-4").style.display = 'block';
        //           document.getElementById("nextBtn-5").style.display = 'none';
        //         if(getLocalStorage){
        //             getLocalStorage.push({
        //               legelRepresentative,
        //               manager,
        //               per: document.getElementById('firstSharehoderPercentage').value
        //             })
        //           }
        //       }

        //       if(!legelRepresentative && manager && document.getElementById('firstSharehoderPercentage').value == '100') {
        //         var x = document.getElementsByClassName("step");
        //         x[0].style.display = 'none'
        //         x[1].style.display = 'none'
        //         x[2].style.display = 'none'
        //         x[3].style.display = 'none'
        //         x[4].style.display = 'block'
        //         x[5].style.display = 'none'
        //         document.getElementById("nextBtn").style.display = 'none';
        //           document.getElementById("nextBtn-1").style.display = 'none';
        //           document.getElementById("nextBtn-2").style.display = 'none';
        //           document.getElementById("nextBtn-3").style.display = 'none';
        //           document.getElementById("nextBtn-4").style.display = 'none';
        //           document.getElementById("nextBtn-5").style.display = 'block';
        //         if(getLocalStorage){
        //             getLocalStorage.push({
        //               legelRepresentative,
        //               manager,
        //               per: document.getElementById('firstSharehoderPercentage').value
        //             })
        //           }
        //       }
        // }

        // function nextPrev_4() {
        //   const getLocalStorage = JSON.parse(localStorage.getItem(window.location.href))
        //   if(getLocalStorage){
        //       getLocalStorage.legelRepresentative = true
        //       getLocalStorage.manager = false
        //       localStorage.setItem(window.location.href, JSON.stringify(getLocalStorage))
        //   }
        //           var x = document.getElementsByClassName("step");
        //           console.log("x",x)
        //           x[0].style.display = 'none'
        //           x[1].style.display = 'none'
        //           x[2].style.display = 'none'
        //           x[3].style.display = 'none'
        //           x[4].style.display = 'none'
        //           x[5].style.display = 'block'
        //           document.getElementById("nextBtn").style.display = 'none';
        //           document.getElementById("nextBtn-1").style.display = 'none';
        //           document.getElementById("nextBtn-2").style.display = 'none';
        //           document.getElementById("nextBtn-3").style.display = 'none';
        //           document.getElementById("nextBtn-4").style.display = 'none';
        //           document.getElementById("nextBtn-5").style.display = 'block';
        // }
        
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }

        
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }

          function uploadDocs() {
            console.log('uploading file.....');
            let form = document.getElementById('signUpForm');
            var formData = new FormData();
            let fileInput = document.getElementById('uploadFile');
            formData.append('file', fileInput.files[0]);
            formData.append('company_type', 1);
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

            $.ajax({
              url: '/index.php/upload-company-docs',
              type: 'POST',
              data: formData,
              processData: false, // Important: Don't process FormData
              contentType: false, // Important: Don't set content type
              success: function(response) {
                  console.log('Upload successful');
              },
              error: function(xhr, status, error) {
                  console.error('Error uploading file:', error);
              }
          });
        }