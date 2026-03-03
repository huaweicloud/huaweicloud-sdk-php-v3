<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCertificateResponseBodyApplicationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCertificateResponseBody_application_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * country  国家。
    * companyName  公司名称。
    * companyProvince  公司省份。
    * companyCity  公司所在城市。
    * applicantName  申请人名称。
    * applicantPhone  申请人电话。
    * applicantEmail  申请人邮箱。
    * contactName  技术联系人名称。
    * contactPhone  技术联系人电话。
    * contactEmail  技术联系人邮箱。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'country' => 'string',
            'companyName' => 'string',
            'companyProvince' => 'string',
            'companyCity' => 'string',
            'applicantName' => 'string',
            'applicantPhone' => 'string',
            'applicantEmail' => 'string',
            'contactName' => 'string',
            'contactPhone' => 'string',
            'contactEmail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * country  国家。
    * companyName  公司名称。
    * companyProvince  公司省份。
    * companyCity  公司所在城市。
    * applicantName  申请人名称。
    * applicantPhone  申请人电话。
    * applicantEmail  申请人邮箱。
    * contactName  技术联系人名称。
    * contactPhone  技术联系人电话。
    * contactEmail  技术联系人邮箱。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'country' => null,
        'companyName' => null,
        'companyProvince' => null,
        'companyCity' => null,
        'applicantName' => null,
        'applicantPhone' => null,
        'applicantEmail' => null,
        'contactName' => null,
        'contactPhone' => null,
        'contactEmail' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * country  国家。
    * companyName  公司名称。
    * companyProvince  公司省份。
    * companyCity  公司所在城市。
    * applicantName  申请人名称。
    * applicantPhone  申请人电话。
    * applicantEmail  申请人邮箱。
    * contactName  技术联系人名称。
    * contactPhone  技术联系人电话。
    * contactEmail  技术联系人邮箱。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'country' => 'country',
            'companyName' => 'company_name',
            'companyProvince' => 'company_province',
            'companyCity' => 'company_city',
            'applicantName' => 'applicant_name',
            'applicantPhone' => 'applicant_phone',
            'applicantEmail' => 'applicant_email',
            'contactName' => 'contact_name',
            'contactPhone' => 'contact_phone',
            'contactEmail' => 'contact_email'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * country  国家。
    * companyName  公司名称。
    * companyProvince  公司省份。
    * companyCity  公司所在城市。
    * applicantName  申请人名称。
    * applicantPhone  申请人电话。
    * applicantEmail  申请人邮箱。
    * contactName  技术联系人名称。
    * contactPhone  技术联系人电话。
    * contactEmail  技术联系人邮箱。
    *
    * @var string[]
    */
    protected static $setters = [
            'country' => 'setCountry',
            'companyName' => 'setCompanyName',
            'companyProvince' => 'setCompanyProvince',
            'companyCity' => 'setCompanyCity',
            'applicantName' => 'setApplicantName',
            'applicantPhone' => 'setApplicantPhone',
            'applicantEmail' => 'setApplicantEmail',
            'contactName' => 'setContactName',
            'contactPhone' => 'setContactPhone',
            'contactEmail' => 'setContactEmail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * country  国家。
    * companyName  公司名称。
    * companyProvince  公司省份。
    * companyCity  公司所在城市。
    * applicantName  申请人名称。
    * applicantPhone  申请人电话。
    * applicantEmail  申请人邮箱。
    * contactName  技术联系人名称。
    * contactPhone  技术联系人电话。
    * contactEmail  技术联系人邮箱。
    *
    * @var string[]
    */
    protected static $getters = [
            'country' => 'getCountry',
            'companyName' => 'getCompanyName',
            'companyProvince' => 'getCompanyProvince',
            'companyCity' => 'getCompanyCity',
            'applicantName' => 'getApplicantName',
            'applicantPhone' => 'getApplicantPhone',
            'applicantEmail' => 'getApplicantEmail',
            'contactName' => 'getContactName',
            'contactPhone' => 'getContactPhone',
            'contactEmail' => 'getContactEmail'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['companyProvince'] = isset($data['companyProvince']) ? $data['companyProvince'] : null;
        $this->container['companyCity'] = isset($data['companyCity']) ? $data['companyCity'] : null;
        $this->container['applicantName'] = isset($data['applicantName']) ? $data['applicantName'] : null;
        $this->container['applicantPhone'] = isset($data['applicantPhone']) ? $data['applicantPhone'] : null;
        $this->container['applicantEmail'] = isset($data['applicantEmail']) ? $data['applicantEmail'] : null;
        $this->container['contactName'] = isset($data['contactName']) ? $data['contactName'] : null;
        $this->container['contactPhone'] = isset($data['contactPhone']) ? $data['contactPhone'] : null;
        $this->container['contactEmail'] = isset($data['contactEmail']) ? $data['contactEmail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 255)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 0)) {
                $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) > 255)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyProvince']) && (mb_strlen($this->container['companyProvince']) > 255)) {
                $invalidProperties[] = "invalid value for 'companyProvince', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['companyProvince']) && (mb_strlen($this->container['companyProvince']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyProvince', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyCity']) && (mb_strlen($this->container['companyCity']) > 255)) {
                $invalidProperties[] = "invalid value for 'companyCity', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['companyCity']) && (mb_strlen($this->container['companyCity']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyCity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applicantName']) && (mb_strlen($this->container['applicantName']) > 255)) {
                $invalidProperties[] = "invalid value for 'applicantName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['applicantName']) && (mb_strlen($this->container['applicantName']) < 0)) {
                $invalidProperties[] = "invalid value for 'applicantName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applicantPhone']) && (mb_strlen($this->container['applicantPhone']) > 255)) {
                $invalidProperties[] = "invalid value for 'applicantPhone', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['applicantPhone']) && (mb_strlen($this->container['applicantPhone']) < 0)) {
                $invalidProperties[] = "invalid value for 'applicantPhone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applicantEmail']) && (mb_strlen($this->container['applicantEmail']) > 255)) {
                $invalidProperties[] = "invalid value for 'applicantEmail', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['applicantEmail']) && (mb_strlen($this->container['applicantEmail']) < 0)) {
                $invalidProperties[] = "invalid value for 'applicantEmail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['contactName']) && (mb_strlen($this->container['contactName']) > 255)) {
                $invalidProperties[] = "invalid value for 'contactName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['contactName']) && (mb_strlen($this->container['contactName']) < 0)) {
                $invalidProperties[] = "invalid value for 'contactName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['contactPhone']) && (mb_strlen($this->container['contactPhone']) > 255)) {
                $invalidProperties[] = "invalid value for 'contactPhone', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['contactPhone']) && (mb_strlen($this->container['contactPhone']) < 0)) {
                $invalidProperties[] = "invalid value for 'contactPhone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['contactEmail']) && (mb_strlen($this->container['contactEmail']) > 255)) {
                $invalidProperties[] = "invalid value for 'contactEmail', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['contactEmail']) && (mb_strlen($this->container['contactEmail']) < 0)) {
                $invalidProperties[] = "invalid value for 'contactEmail', the character length must be bigger than or equal to 0.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets country
    *  国家。
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country 国家。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets companyName
    *  公司名称。
    *
    * @return string|null
    */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
    * Sets companyName
    *
    * @param string|null $companyName 公司名称。
    *
    * @return $this
    */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;
        return $this;
    }

    /**
    * Gets companyProvince
    *  公司省份。
    *
    * @return string|null
    */
    public function getCompanyProvince()
    {
        return $this->container['companyProvince'];
    }

    /**
    * Sets companyProvince
    *
    * @param string|null $companyProvince 公司省份。
    *
    * @return $this
    */
    public function setCompanyProvince($companyProvince)
    {
        $this->container['companyProvince'] = $companyProvince;
        return $this;
    }

    /**
    * Gets companyCity
    *  公司所在城市。
    *
    * @return string|null
    */
    public function getCompanyCity()
    {
        return $this->container['companyCity'];
    }

    /**
    * Sets companyCity
    *
    * @param string|null $companyCity 公司所在城市。
    *
    * @return $this
    */
    public function setCompanyCity($companyCity)
    {
        $this->container['companyCity'] = $companyCity;
        return $this;
    }

    /**
    * Gets applicantName
    *  申请人名称。
    *
    * @return string|null
    */
    public function getApplicantName()
    {
        return $this->container['applicantName'];
    }

    /**
    * Sets applicantName
    *
    * @param string|null $applicantName 申请人名称。
    *
    * @return $this
    */
    public function setApplicantName($applicantName)
    {
        $this->container['applicantName'] = $applicantName;
        return $this;
    }

    /**
    * Gets applicantPhone
    *  申请人电话。
    *
    * @return string|null
    */
    public function getApplicantPhone()
    {
        return $this->container['applicantPhone'];
    }

    /**
    * Sets applicantPhone
    *
    * @param string|null $applicantPhone 申请人电话。
    *
    * @return $this
    */
    public function setApplicantPhone($applicantPhone)
    {
        $this->container['applicantPhone'] = $applicantPhone;
        return $this;
    }

    /**
    * Gets applicantEmail
    *  申请人邮箱。
    *
    * @return string|null
    */
    public function getApplicantEmail()
    {
        return $this->container['applicantEmail'];
    }

    /**
    * Sets applicantEmail
    *
    * @param string|null $applicantEmail 申请人邮箱。
    *
    * @return $this
    */
    public function setApplicantEmail($applicantEmail)
    {
        $this->container['applicantEmail'] = $applicantEmail;
        return $this;
    }

    /**
    * Gets contactName
    *  技术联系人名称。
    *
    * @return string|null
    */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
    * Sets contactName
    *
    * @param string|null $contactName 技术联系人名称。
    *
    * @return $this
    */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;
        return $this;
    }

    /**
    * Gets contactPhone
    *  技术联系人电话。
    *
    * @return string|null
    */
    public function getContactPhone()
    {
        return $this->container['contactPhone'];
    }

    /**
    * Sets contactPhone
    *
    * @param string|null $contactPhone 技术联系人电话。
    *
    * @return $this
    */
    public function setContactPhone($contactPhone)
    {
        $this->container['contactPhone'] = $contactPhone;
        return $this;
    }

    /**
    * Gets contactEmail
    *  技术联系人邮箱。
    *
    * @return string|null
    */
    public function getContactEmail()
    {
        return $this->container['contactEmail'];
    }

    /**
    * Sets contactEmail
    *
    * @param string|null $contactEmail 技术联系人邮箱。
    *
    * @return $this
    */
    public function setContactEmail($contactEmail)
    {
        $this->container['contactEmail'] = $contactEmail;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

