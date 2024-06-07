jQuery(document).ready(function ($) {
  new WOW().init();


  $(window).on('load', function () {
    $('.loader_area_main').addClass('fade-out');
    setTimeout(function () {
      $('.loader_area_main').hide();
    }, 500); // Match the timeout duration with the CSS transition duration
  });

  // Select li elements that have ul as children
  $('.nav-ul li:has(ul)').each(function () {
    // Append a div to their child a tags
    $(this).children('a').append('<span class="dropdown-arrow"><i class="fa-solid fa-chevron-down"></i></span>');
  });


  if ($(window).width() <= 1199) {
    $(".nav-ul .dropdown-arrow").on("click", function (e) {
      e.preventDefault();
      if ($(this).parent().hasClass("active")) {
        $(this).parent().removeClass("active");
        $(this)
          .parent().siblings(".sub-menu")
          .slideUp(200);
      } else {
        $(".nav-ul .dropdown-arrow").parent().removeClass("active");
        $(this).parent().addClass("active");
        $(".sub-menu").slideUp(200);
        $(this)
          .parent().siblings(".sub-menu")
          .slideDown(200);
      }
    });
  }

  $(".menu_bar").on('click', function () {
    $(".header_area .nav-area").addClass("mobi-nav-active");
    $(".black_overlay_for_mobile_responsive").fadeIn();
    $("body").addClass("scroll_disable");
  });
  $(".cross").on('click', function () {
    $(".header_area .nav-area").removeClass("mobi-nav-active");
    $(".black_overlay_for_mobile_responsive").fadeOut(1000);
    $("body").removeClass("scroll_disable");
  });
  $(".black_overlay_for_mobile_responsive").on('click', function () {
    $(".header_area .nav-area").removeClass("mobi-nav-active");
    $(this).fadeOut(1000);
    $("body").removeClass("scroll_disable");
  });

  // Show the first tab and hide the rest
  $('#tabs-nav li:first-child').addClass('active');
  $('.tab-content').hide();
  $('.tab-content:first').show();

  // Click function
  $('#tabs-nav li').click(function () {
    $('#tabs-nav li').removeClass('active');
    $(this).addClass('active');
    $('.tab-content').hide();

    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });

  $(".faqs-area .set > a").on("click", function (e) {
    e.preventDefault();
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".faqs-area .content")
        .slideUp(200);
      $(".faqs-area .set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
    } else {
      $(".faqs-area .set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
      $(this)
        .find("i")
        .removeClass("fa-plus")
        .addClass("fa-minus");
      $(".faqs-area .set > a").removeClass("active");
      $(this).addClass("active");
      $(".faqs-area .content").slideUp(200);
      $(this)
        .siblings(".faqs-area .content")
        .slideDown(200);
    }

  });
  $('.table_area_main').on('scroll', function () {
    if ($(this).scrollTop() > 0 || $(this).scrollLeft() > 0) {
      $('.scroll_down_arrow').fadeOut();
    } else {
      $('.scroll_down_arrow').fadeIn();
    }
  });
  // if ($(window).width() <= 991) {
  //   $('.testimonial_slider_area').removeClass('wow slideInLeft');
  // }

  $('.scroll_down_arrow').on('click', function () {
    $('.table_area_main').animate({ scrollTop: $('.table_area_main')[0].scrollHeight }, 'slow');
  });

  $('[id^=tab]').each(function () {
    var tabId = $(this).attr('id');
    $('#' + tabId + ' .scroll_down_arrow').on('click', function () {
      var tableArea = $('#' + tabId + ' .table_area_main');
      if (tableArea.length === 0) {
        console.error('No .table_area_main element found in the tab with ID:', tabId);
        return;
      }
      console.log('Scrolling tab:', tabId);
      tableArea.animate({ scrollTop: tableArea[0].scrollHeight }, 'slow');
    });
  });


  $('select.custom-select').each(function () {
    $(this).find('option:first-child').attr('disabled', 'disabled');
  });

  // AUTOMATIC LEFT SWIFT 
  if ($(window).width() <= 767) {
    $('#tabs-nav li').click(function (event) {
      event.preventDefault(); // Prevent the default anchor behavior

      // Remove the active class from all tabs
      $('#tabs-nav li').removeClass('active');

      // Add the active class to the clicked tab
      $(this).addClass('active');

      // Scroll the tab container to the left position of the clicked tab
      var $tabContainer = $('.tab_top_area');
      var $tab = $(this);
      var tabContainerWidth = $tabContainer.width();
      var tabWidth = $tab.outerWidth(true);

      $tabContainer.animate({
        scrollLeft: $tab.position().left + $tabContainer.scrollLeft() - (tabContainerWidth - tabWidth) / 2
      }, 300); // Adjust the scroll duration as needed
    });
  }


  // Open modal when the page loads
  $('#estimate_page_modal_id').addClass('modal_open').modal('show');

  // Add disabled attribute to inputs and select elements in .level_of_cleaning
  $('.level_of_cleaning input, .level_of_cleaning select').prop('disabled', true);

  // Disable inputs and select elements in .level_of_cleaning when modal is open
  $('#estimate_page_modal_id').on('shown.bs.modal', function () {
    $('.level_of_cleaning input, .level_of_cleaning select').prop('disabled', true);
  });

  // Enable inputs and select elements in .level_of_cleaning when modal is closed
  $('#estimate_page_modal_id').on('hidden.bs.modal', function () {
    $('.level_of_cleaning input, .level_of_cleaning select').prop('disabled', false);
  });


  // Function to set a cookie
  function setCookie(name, value, days) {
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }

  // Function to get a cookie
  function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) === ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }

  function frontFormData() {
    const dataObject = {
      'fname': getCookie('fname'),
      'lname': getCookie('lname'),
      'email': getCookie('email'),
      'phoneno': getCookie('phoneno'),
    }


    if (dataObject.fname) {
      $('input[name=resultfirstName]').val(dataObject.fname);
    }
    if (dataObject.lname) {
      $('input[name=resultlastName]').val(dataObject.lname);
    }
    if (dataObject.email) {
      $('input[name=resultemail]').val(dataObject.email);
    }
    if (dataObject.phoneno) {
      $('input[name=resultphoneNumber]').val(dataObject.phoneno);
    }
  }

  $(document).on('wpcf7submit', function (event) {
    if (event.detail.status === 'mail_sent' && event.detail.contactFormId === 623) {

      let formInputDetails = event.detail.inputs;


      $('#estimate_page_modal_id').modal('hide'); // Hide the modal

      // Store form submitted flag in cookie for 2 days
      setCookie('formSubmitted', 'true', 2);
      setCookie('fname', formInputDetails[0].value, 2);
      setCookie('lname', formInputDetails[1].value, 2);
      setCookie('email', formInputDetails[2].value, 2);
      setCookie('phoneno', formInputDetails[3].value, 2);

      console.log("Form submitted (cookie set)");

      frontFormData();


    }
  });


  const formSubmitted = getCookie('formSubmitted');
  if (formSubmitted === 'true') {
    $('#estimate_page_modal_id').modal('hide');
  }


  frontFormData();


});


document.addEventListener('DOMContentLoaded', function () {

  let previousFormData = {}; // Object to store previous form data
  // Collect the calculator results
  function collectCalculatorResults() {
    let baseCharge = document.querySelector('#classic_base_charge').innerText;
    let frequencyRate = document.querySelector('#total_frequency_rate').innerText;
    let levelOfServiceName = document.querySelector('[name=service_type]').selectedOptions[0].text;
    let timePeriod = document.querySelector('[name=month-week]').selectedOptions[0].text;
    let timePeriodOneTime = document.querySelector('[name="one_time_cleaning"]').selectedOptions[0].text;
    let TotalsqureFt = document.querySelector('[name=total_square_ft_input]').value;
    let kitchenCost = document.querySelector('#total_kitchen').innerText;
    let bathroomCost = document.querySelector('#total_bathroom').innerText;
    let dustCost = document.querySelector('#total_dust').innerText;
    let floorCost = document.querySelector('#total_floor').innerText;
    let finalPrice = document.querySelector('#final_price').innerText;

    // Combine results into a single string
    let results = "<b>Home Cleaning Services</b><br>";

    if (levelOfServiceName) {
      results += "Level of Cleaning Needed: <b>" + levelOfServiceName + "</b><br>";
    }
    if (TotalsqureFt) {
      results += "How Much Square Do You Have?: <b>" + TotalsqureFt + "</b><br>";
    }
    if (levelOfServiceName == 'Recurring') {
      if (timePeriod) {
        results += "Select Time Period: <b>" + timePeriod + "</b><br>";
      }
    } else if (levelOfServiceName == 'One-time/deep clean') {
      if (timePeriodOneTime) {
        results += "Select Time Period: <b>" + timePeriodOneTime + "</b><br>";
      }
    }

    if (baseCharge) {
      results += "Base Charge: <b> $" + baseCharge + "</b><br>";
    }

    if (levelOfServiceName == 'Pick 2 or 3 Mini Service') {

    } else {
      if (frequencyRate) {
        results += "Rate Of Square Ft. : <b> $" + frequencyRate + "</b> <br>";
      }
    }

    if (levelOfServiceName == 'Pick 2 or 3 Mini Service') {

      if (kitchenCost) {
        results += "Kitchen: <b> $" + kitchenCost + "</b> <br>";
      }
      if (bathroomCost) {
        results += "Bathroom: <b> $" + bathroomCost + "</b> <br>";
      }
      if (dustCost) {
        results += "Dust: <b> $" + dustCost + "</b> <br>";
      }
      if (floorCost) {
        results += "Floor: <b> $" + floorCost + "</b> <br>";
      }
    }
    if (finalPrice) {
      results += "Total: <b> $" + finalPrice + "</b> <br>";
    }

    // Set the results into the hidden field
    document.querySelector('input[name="calculator-data"]').value = results;
  }
  function collectCalculatorResultsOffice() {
    let baseChargeOffice = document.querySelector('#classic_base_charge_for_office').innerText;
    let frequencyRateOffice = document.querySelector('#total_frequency_rate_for_office').innerText;
    let levelOfServiceNameOffice = document.querySelector('[name=service_type_office]').selectedOptions[0].text;
    let timePeriodOffice = document.querySelector('[name=month_week_for_office]').selectedOptions[0].text;
    let timePeriodOfficeOneTime = document.querySelector('[name=one_time_cleaning_for_office]').selectedOptions[0].text;
    let TotalsqureFtOffice = document.querySelector('[name=total_square_ft_input_for_office]').value;
    let finalPriceOffice = document.querySelector('#final_price_for_office').innerText;

    // Combine results into a single string
    let results = "<b>Business Cleaning Services</b><br>";

    if (levelOfServiceNameOffice) {
      results += "Level of Cleaning Needed: <b>" + levelOfServiceNameOffice + "</b><br>";
    }
    if (TotalsqureFtOffice) {
      results += "How Much Square Do You Have?: <b>" + TotalsqureFtOffice + "</b><br>";
    }
    if (levelOfServiceNameOffice == 'Classic Service') {
      if (timePeriodOffice) {
        results += "Select Time Period: <b>" + timePeriodOffice + "</b><br>";
      }
    } else if (levelOfServiceNameOffice == 'One-time/deep clean') {
      if (timePeriodOfficeOneTime) {
        results += "Select Time Period: <b>" + timePeriodOfficeOneTime + "</b><br>";
      }
    }

    if (baseChargeOffice) {
      results += "Base Charge: <b> $" + baseChargeOffice + "</b><br>";
    }

    if (frequencyRateOffice) {
      results += "Rate Of Square Ft. : <b> $" + frequencyRateOffice + "</b> <br>";
    }

    if (finalPriceOffice) {
      results += "Total: <b> $" + finalPriceOffice + "</b> <br>";
    }

    // Set the results into the hidden field
    document.querySelector('input[name="calculator-data"]').value = results;
  }
  function collectCalculatorResultsMoving() {

    // Combine results into a single string
    let results = "<b>Moving & Construction Clean-up</b><br>Base Charge: <b>$60/hour</b><br>";

    // Set the results into the hidden field
    document.querySelector('input[name="calculator-data"]').value = results;
  }

  // Add an event listener to the button
  document.getElementById('send_calculator_results').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent the default form submission
    collectCalculatorResults();

    // Make an asynchronous request to submit the form
    if (isFinalPriceValid('#final_price')) {
      // Make an asynchronous request to submit the form
      submitForm('send_calculator_results');
    }
  });

  document.getElementById('send_calculator_results_office').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent the default form submission
    collectCalculatorResultsOffice();

    // Make an asynchronous request to submit the form
    submitForm('send_calculator_results_office');
  });
  document.getElementById('send_calculator_results_moving').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent the default form submission
    collectCalculatorResultsMoving();

    // Make an asynchronous request to submit the form
    submitForm('send_calculator_results_moving');
  });

  function submitForm(buttonId) {
    let form = document.querySelector('#wpcf7-f627-o2 form');
    let formData = new FormData(form);

    // Check if the form data has changed
    let formDataChanged = JSON.stringify(previousFormData) !== JSON.stringify(Object.fromEntries(formData));

    if (formDataChanged) {
      showLoader(buttonId); // Show loader
      fetch(form.action, {
        method: 'POST',
        body: formData
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          // Handle success
          console.log('Form submitted successfully for button:', buttonId);
          // Display success message after 1 second
          setTimeout(function () {
            hideLoader(buttonId);
            displaySuccessMessage(buttonId);
            // Update previous form data
            previousFormData = Object.fromEntries(formData);
            // Disable the button
            disableButton(buttonId);
          }, 1000);
        })
        .catch(error => {
          // Handle error
          console.error('There was a problem with form submission:', error);
          // Hide loader
          hideLoader(buttonId);
        });
    } else {
      // Disable the button and reduce opacity
      disableButton(buttonId);
    }
  }

  // Function to check if the final price is valid (non-zero)
  function isFinalPriceValid(finalPriceSelector) {
    let finalPriceElement = document.querySelector(finalPriceSelector);
    if (finalPriceElement) {
      let finalPrice = parseFloat(finalPriceElement.innerText.replace('$', ''));
      if (finalPrice === 0) {
        disableButtonForZeroPrice();
        return false;
      }
    }
    return true;
  }

  // Function to display success message
  function displaySuccessMessage(buttonId) {
    let button = document.getElementById(buttonId);
    let successMessage = document.createElement('p');
    successMessage.className = 'success_btn';
    successMessage.textContent = 'Email has been sent successfully';
    button.insertAdjacentElement('afterend', successMessage);
    // Automatically remove the success message after 2 seconds
    setTimeout(function () {
      removeMessage(successMessage);
    }, 2000);
  }

  // Function to show loader
  function showLoader(buttonId) {
    let button = document.getElementById(buttonId);
    let loader = document.createElement('div');
    loader.className = 'calc_loader';
    button.appendChild(loader);
    button.disabled = true; // Disable the button while loading
  }

  // Function to hide loader
  function hideLoader(buttonId) {
    let button = document.getElementById(buttonId);
    let loader = button.querySelector('.calc_loader');
    if (loader) {
      loader.remove();
    }
    button.disabled = false; // Re-enable the button after loading
  }

  // Function to remove message after a specified delay
  function removeMessage(messageElement) {
    if (messageElement) {
      messageElement.remove();
    }
  }

  // Function to disable button and set opacity
  function disableButton(buttonId) {
    let button = document.getElementById(buttonId);
    button.setAttribute('disabled', 'disabled');
    button.style.opacity = '0.5';
  }

  // Function to enable button and reset opacity
  function enableButton(buttonId) {
    let button = document.getElementById(buttonId);
    button.removeAttribute('disabled');
    button.style.opacity = '1';
  }

  // Function to disable all buttons when final price is zero
  function disableButtonForZeroPrice() {
    disableButton('send_calculator_results');
    disableButton('send_calculator_results_office');
    disableButton('send_calculator_results_moving');
  }

  // Add event listeners to inputs and selects to re-enable the button on change
  function addInputListeners() {
    let inputs = document.querySelectorAll('input, select');
    inputs.forEach(input => {
      input.addEventListener('change', function () {
        if (isFinalPriceValid('#final_price')) {
          enableButton('send_calculator_results');
        }
        if (isFinalPriceValid('#final_price_for_office')) {
          enableButton('send_calculator_results_office');
        }
        if (isFinalPriceValid('#final_price_for_moving')) {
          enableButton('send_calculator_results_moving');
        }
      });
    });
  }

  addInputListeners();
});



document.addEventListener('DOMContentLoaded', function () {
  const firstSet = document.querySelector('.faqs-area .set');

  // Check if it exists before making changes
  if (firstSet) {
    // Replace the class of the 'i' element from 'fa-plus' to 'fa-minus'
    const icon = firstSet.querySelector('i.fa');
    icon.classList.remove('fa-plus');
    icon.classList.add('fa-minus');

    // Add the 'active' class to its child 'a' element
    const firstLink = firstSet.querySelector('a');
    const firstContent = firstSet.querySelector('.content');
    firstLink.classList.add('active');
    firstContent.style.display = 'block';
  }
});

document.addEventListener('DOMContentLoaded', function () {
  // Check if we are on the desired page by checking for a unique element
  if (document.querySelector('.free_estimate_area')) { // Replace '.unique-element-class' with the actual class or ID of the unique element
    // grab everything we need
    let squreFtInput = document.querySelector('[name=total_square_ft_input]');
    let quantityInput = document.querySelector('[name=month-week]');
    let quantityInput2 = document.querySelector('[name=one_time_cleaning]');
    let bathroom_cleaning = document.querySelector('[name=bathroom_cleaning]');
    let kitchen_cleaning = document.querySelector('[name=kitchen_cleaning]');
    let dust_cleaning = document.querySelector('[name=dust_cleaning]'); // added dust cleaning checkbox
    let floor_cleaning = document.querySelector('[name=floor_cleaning]'); // added floor cleaning checkbox

    let addon_estimate_area = document.querySelector('#addon_estimate_id');
    let estimate_bill_area = document.querySelector('#estimate_bill_id');

    let serviceTypeInput = document.querySelector('[name=service_type]');
    let total_frequency_rate = document.querySelector('#total_frequency_rate');

    let squareFt1 = document.querySelector('#total_square_ft1');

    let classicBaseCharge = document.querySelector('#classic_base_charge');

    let final_price = document.querySelector('#final_price');
    let total_bathroom = document.querySelector('#total_bathroom');
    let total_kitchen = document.querySelector('#total_kitchen');
    let total_dust = document.querySelector('#total_dust'); // added total dust element
    let total_floor = document.querySelector('#total_floor'); // added total floor element

    // create functions we'll need
    function calculateCost() {
      let SqureFtInput = parseFloat(squreFtInput.value) || 0;
      let quantity = 0;
      let bathroomQuantity = 0;
      let bathroomCleaning = 0;
      let kitchenQuantity = 0;
      let kitchenCleaning = 0;
      let dustCleaningCost = 0;
      let floorCleaningCost = 0;

      // Get the selected service type
      let serviceType = serviceTypeInput.value;

      // Update based on service type
      if (serviceType === 'recurring') {
        classicBaseCharge.innerText = '20.00';
        quantity = parseFloat(quantityInput.value) || 0;
        quantityInput2.setAttribute('disabled', 'true');
        quantityInput2.parentNode.parentNode.classList.add('select_disble');
        bathroom_cleaning.parentNode.parentNode.classList.add('select_disble');
        kitchen_cleaning.parentNode.parentNode.classList.add('select_disble');
        addon_estimate_area.classList.add('select_disble');
        estimate_bill_area.classList.remove('select_disble');
        quantityInput.removeAttribute('disabled');
        quantityInput.parentNode.parentNode.classList.remove('select_disble');
        squareFt1.parentNode.classList.remove('select_disble');
      } else if (serviceType === 'one_time') {
        classicBaseCharge.innerText = '40.00';
        quantity = parseFloat(quantityInput2.value) || 0;
        quantityInput.setAttribute('disabled', 'true');
        quantityInput.parentNode.parentNode.classList.add('select_disble');
        bathroom_cleaning.parentNode.parentNode.classList.add('select_disble');
        kitchen_cleaning.parentNode.parentNode.classList.add('select_disble');
        addon_estimate_area.classList.add('select_disble');
        estimate_bill_area.classList.remove('select_disble');
        quantityInput2.removeAttribute('disabled');
        quantityInput2.parentNode.parentNode.classList.remove('select_disble');
        squareFt1.parentNode.classList.remove('select_disble');
      } else if (serviceType === 'mini_service') {
        classicBaseCharge.innerText = '0.00';
        bathroomQuantity = parseFloat(bathroom_cleaning.value) || 0;
        kitchenQuantity = parseFloat(kitchen_cleaning.value) || 0;
        quantityInput.setAttribute('disabled', 'true');
        quantityInput.parentNode.parentNode.classList.add('select_disble');
        quantityInput2.setAttribute('disabled', 'true');
        quantityInput2.parentNode.parentNode.classList.add('select_disble');
        addon_estimate_area.classList.remove('select_disble');
        squareFt1.parentNode.classList.add('select_disble');
        bathroom_cleaning.parentNode.parentNode.classList.remove('select_disble');
        kitchen_cleaning.parentNode.parentNode.classList.remove('select_disble');
        if (bathroomQuantity === 1) {
          bathroomCleaning = bathroomQuantity * 25;
        } else if (bathroomQuantity > 1) {
          bathroomCleaning = 25 + (bathroomQuantity - 1) * 10;
        }
        kitchenCleaning = kitchenQuantity * 25;

        // Calculate dust cleaning cost
        if (dust_cleaning.checked) {
          dustCleaningCost = 0.01 * SqureFtInput;
          total_dust.parentNode.parentNode.classList.remove('select_disble');
        } else {
          total_dust.parentNode.parentNode.classList.add('select_disble');
        }

        // Calculate floor cleaning cost
        if (floor_cleaning.checked) {
          floorCleaningCost = 0.02 * SqureFtInput;
          total_floor.parentNode.parentNode.classList.remove('select_disble');
        } else {
          total_floor.parentNode.parentNode.classList.add('select_disble');
        }
      } else {
        // Reset to default if not Recurring or One_time
        classicBaseCharge.innerText = '';
        quantityInput.removeAttribute('disabled');
        quantityInput.parentNode.parentNode.classList.remove('select_disble');
        quantityInput2.removeAttribute('disabled');
        quantityInput2.parentNode.parentNode.classList.remove('select_disble');
        bathroom_cleaning.removeAttribute('disabled');
        bathroom_cleaning.parentNode.parentNode.classList.remove('select_disble');
        kitchen_cleaning.removeAttribute('disabled');
        kitchen_cleaning.parentNode.parentNode.classList.remove('select_disble');
        addon_estimate_area.classList.remove('select_disble');
        estimate_bill_area.classList.add('select_disble');
      }



      let frequency_total = SqureFtInput * quantity;
      total_frequency_rate.innerText = frequency_total.toFixed(2);

      let baseCharge = parseFloat(classicBaseCharge.innerText) || 0;
      let finalPrice = frequency_total + baseCharge + bathroomCleaning + kitchenCleaning + dustCleaningCost + floorCleaningCost;
      final_price.innerText = finalPrice.toFixed(2);

      if (bathroomQuantity > 0) {
        total_bathroom.innerText = bathroomCleaning.toFixed(2);
        total_bathroom.parentNode.parentNode.classList.remove('select_disble');
      } else {
        total_bathroom.innerText = '0.00';
        total_bathroom.parentNode.parentNode.classList.add('select_disble');
      }
      if (kitchenQuantity > 0) {
        total_kitchen.innerText = kitchenCleaning.toFixed(2);
        total_kitchen.parentNode.parentNode.classList.remove('select_disble');
      } else {
        total_kitchen.innerText = '0.00';
        total_kitchen.parentNode.parentNode.classList.add('select_disble');
      }

      total_dust.innerText = dustCleaningCost.toFixed(2); // display dust cleaning cost
      total_floor.innerText = floorCleaningCost.toFixed(2); // display floor cleaning cost
    }

    // on first run
    calculateCost();

    // add event listeners
    squreFtInput.addEventListener('input', calculateCost);
    quantityInput.addEventListener('input', calculateCost);
    quantityInput2.addEventListener('input', calculateCost);
    bathroom_cleaning.addEventListener('input', calculateCost);
    kitchen_cleaning.addEventListener('input', calculateCost);
    dust_cleaning.addEventListener('change', calculateCost); // added event listener for dust cleaning checkbox
    floor_cleaning.addEventListener('change', calculateCost); // added event listener for floor cleaning checkbox
    serviceTypeInput.addEventListener('change', calculateCost);
  }
});



document.addEventListener('DOMContentLoaded', function () {
  // grab everything we need
  if (document.querySelector('.free_estimate_area')) {
    let squareFtInput = document.querySelector('[name=total_square_ft_input_for_office]');
    let quantityInput = document.querySelector('[name=month_week_for_office]');
    let quantityInput2 = document.querySelector('[name=one_time_cleaning_for_office]');
    let serviceTypeInput = document.querySelector('[name=service_type_office]');
    let total_frequency_rate = document.querySelector('#total_frequency_rate_for_office');
    let squareFt1 = document.querySelector('#total_square_ft_for_office');
    let classicBaseCharge = document.querySelector('#classic_base_charge_for_office');
    let final_price = document.querySelector('#final_price_for_office');

    // create functions we'll need
    function calculateCostOffice() {
      let squareFt = parseFloat(squareFtInput.value) || 0;
      let quantity = 0;

      // Get the selected service type
      let serviceType = serviceTypeInput.value;

      // Update based on service type
      if (serviceType === 'classic_service_for_office') {
        classicBaseCharge.innerText = '20.00';
        quantity = parseFloat(quantityInput.value) || 0;
        quantityInput2.setAttribute('disabled', 'true');
        quantityInput2.parentNode.parentNode.classList.add('select_disble');
        quantityInput.removeAttribute('disabled');
        quantityInput.parentNode.parentNode.classList.remove('select_disble');
        squareFt1.parentNode.classList.remove('select_disble');
      } else if (serviceType === 'one_time_for_office') {
        classicBaseCharge.innerText = '40.00';
        quantity = parseFloat(quantityInput2.value) || 0;
        quantityInput.setAttribute('disabled', 'true');
        quantityInput.parentNode.parentNode.classList.add('select_disble');
        quantityInput2.removeAttribute('disabled');
        quantityInput2.parentNode.parentNode.classList.remove('select_disble');
        squareFt1.parentNode.classList.remove('select_disble');
      } else {
        // Reset to default if not Recurring or One_time
        classicBaseCharge.innerText = '';
        quantityInput.removeAttribute('disabled');
        quantityInput.parentNode.parentNode.classList.remove('select_disble');
        quantityInput2.removeAttribute('disabled');
        quantityInput2.parentNode.parentNode.classList.remove('select_disble');
      }

      let frequency_total = squareFt * quantity;
      total_frequency_rate.innerText = frequency_total.toFixed(2);

      let baseCharge = parseFloat(classicBaseCharge.innerText) || 0;
      let finalPrice = frequency_total + baseCharge;
      final_price.innerText = finalPrice.toFixed(2);
    }

    // on first run
    calculateCostOffice();

    // add event listeners
    squareFtInput.addEventListener('input', calculateCostOffice);
    quantityInput.addEventListener('input', calculateCostOffice);
    quantityInput2.addEventListener('input', calculateCostOffice);
    serviceTypeInput.addEventListener('change', calculateCostOffice);
  }
});

document.addEventListener('DOMContentLoaded', function () {

  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
});