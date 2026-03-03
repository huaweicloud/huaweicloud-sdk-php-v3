<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCsrRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCsrRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  自定义CSR名称。
    * domainName  CSR绑定的域名。如果您想在提交证书申请时使用该CSR，必须确保证书绑定域名包含此处设置的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  私钥算法。取值如下： - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * usage  CSR用途。取值如下： - PERSONAL：个人证书 - ENTERPRISE：企业证书
    * companyCountry  国家，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：CN。
    * companyProvince  省份，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyCity  城市。当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyName  公司名称。当“usage”取值为“ENTERPRISE”时，本参数必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'domainName' => 'string',
            'sans' => 'string',
            'privateKeyAlgo' => 'string',
            'usage' => 'string',
            'companyCountry' => 'string',
            'companyProvince' => 'string',
            'companyCity' => 'string',
            'companyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  自定义CSR名称。
    * domainName  CSR绑定的域名。如果您想在提交证书申请时使用该CSR，必须确保证书绑定域名包含此处设置的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  私钥算法。取值如下： - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * usage  CSR用途。取值如下： - PERSONAL：个人证书 - ENTERPRISE：企业证书
    * companyCountry  国家，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：CN。
    * companyProvince  省份，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyCity  城市。当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyName  公司名称。当“usage”取值为“ENTERPRISE”时，本参数必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'domainName' => null,
        'sans' => null,
        'privateKeyAlgo' => null,
        'usage' => null,
        'companyCountry' => null,
        'companyProvince' => null,
        'companyCity' => null,
        'companyName' => null
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
    * name  自定义CSR名称。
    * domainName  CSR绑定的域名。如果您想在提交证书申请时使用该CSR，必须确保证书绑定域名包含此处设置的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  私钥算法。取值如下： - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * usage  CSR用途。取值如下： - PERSONAL：个人证书 - ENTERPRISE：企业证书
    * companyCountry  国家，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：CN。
    * companyProvince  省份，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyCity  城市。当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyName  公司名称。当“usage”取值为“ENTERPRISE”时，本参数必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'domainName' => 'domain_name',
            'sans' => 'sans',
            'privateKeyAlgo' => 'private_key_algo',
            'usage' => 'usage',
            'companyCountry' => 'company_country',
            'companyProvince' => 'company_province',
            'companyCity' => 'company_city',
            'companyName' => 'company_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  自定义CSR名称。
    * domainName  CSR绑定的域名。如果您想在提交证书申请时使用该CSR，必须确保证书绑定域名包含此处设置的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  私钥算法。取值如下： - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * usage  CSR用途。取值如下： - PERSONAL：个人证书 - ENTERPRISE：企业证书
    * companyCountry  国家，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：CN。
    * companyProvince  省份，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyCity  城市。当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyName  公司名称。当“usage”取值为“ENTERPRISE”时，本参数必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'domainName' => 'setDomainName',
            'sans' => 'setSans',
            'privateKeyAlgo' => 'setPrivateKeyAlgo',
            'usage' => 'setUsage',
            'companyCountry' => 'setCompanyCountry',
            'companyProvince' => 'setCompanyProvince',
            'companyCity' => 'setCompanyCity',
            'companyName' => 'setCompanyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  自定义CSR名称。
    * domainName  CSR绑定的域名。如果您想在提交证书申请时使用该CSR，必须确保证书绑定域名包含此处设置的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  私钥算法。取值如下： - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    * usage  CSR用途。取值如下： - PERSONAL：个人证书 - ENTERPRISE：企业证书
    * companyCountry  国家，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：CN。
    * companyProvince  省份，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyCity  城市。当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    * companyName  公司名称。当“usage”取值为“ENTERPRISE”时，本参数必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'domainName' => 'getDomainName',
            'sans' => 'getSans',
            'privateKeyAlgo' => 'getPrivateKeyAlgo',
            'usage' => 'getUsage',
            'companyCountry' => 'getCompanyCountry',
            'companyProvince' => 'getCompanyProvince',
            'companyCity' => 'getCompanyCity',
            'companyName' => 'getCompanyName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['sans'] = isset($data['sans']) ? $data['sans'] : null;
        $this->container['privateKeyAlgo'] = isset($data['privateKeyAlgo']) ? $data['privateKeyAlgo'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['companyCountry'] = isset($data['companyCountry']) ? $data['companyCountry'] : null;
        $this->container['companyProvince'] = isset($data['companyProvince']) ? $data['companyProvince'] : null;
        $this->container['companyCity'] = isset($data['companyCity']) ? $data['companyCity'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 63)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
            if ((mb_strlen($this->container['domainName']) > 63)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['domainName']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) > 255)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) < 0)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['privateKeyAlgo'] === null) {
            $invalidProperties[] = "'privateKeyAlgo' can't be null";
        }
            if ((mb_strlen($this->container['privateKeyAlgo']) > 63)) {
                $invalidProperties[] = "invalid value for 'privateKeyAlgo', the character length must be smaller than or equal to 63.";
            }
            if ((mb_strlen($this->container['privateKeyAlgo']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateKeyAlgo', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
        }
            if ((mb_strlen($this->container['usage']) > 255)) {
                $invalidProperties[] = "invalid value for 'usage', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['usage']) < 0)) {
                $invalidProperties[] = "invalid value for 'usage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyCountry']) && (mb_strlen($this->container['companyCountry']) > 255)) {
                $invalidProperties[] = "invalid value for 'companyCountry', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['companyCountry']) && (mb_strlen($this->container['companyCountry']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyCountry', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) > 255)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  自定义CSR名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 自定义CSR名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets domainName
    *  CSR绑定的域名。如果您想在提交证书申请时使用该CSR，必须确保证书绑定域名包含此处设置的域名。
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName CSR绑定的域名。如果您想在提交证书申请时使用该CSR，必须确保证书绑定域名包含此处设置的域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets sans
    *  CSR绑定的附加域名。
    *
    * @return string|null
    */
    public function getSans()
    {
        return $this->container['sans'];
    }

    /**
    * Sets sans
    *
    * @param string|null $sans CSR绑定的附加域名。
    *
    * @return $this
    */
    public function setSans($sans)
    {
        $this->container['sans'] = $sans;
        return $this;
    }

    /**
    * Gets privateKeyAlgo
    *  私钥算法。取值如下： - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    *
    * @return string
    */
    public function getPrivateKeyAlgo()
    {
        return $this->container['privateKeyAlgo'];
    }

    /**
    * Sets privateKeyAlgo
    *
    * @param string $privateKeyAlgo 私钥算法。取值如下： - RSA_2048 - RSA_3072 - RSA_4096 - EC_P256 - EC_P384 - SM2
    *
    * @return $this
    */
    public function setPrivateKeyAlgo($privateKeyAlgo)
    {
        $this->container['privateKeyAlgo'] = $privateKeyAlgo;
        return $this;
    }

    /**
    * Gets usage
    *  CSR用途。取值如下： - PERSONAL：个人证书 - ENTERPRISE：企业证书
    *
    * @return string
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param string $usage CSR用途。取值如下： - PERSONAL：个人证书 - ENTERPRISE：企业证书
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
        return $this;
    }

    /**
    * Gets companyCountry
    *  国家，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：CN。
    *
    * @return string|null
    */
    public function getCompanyCountry()
    {
        return $this->container['companyCountry'];
    }

    /**
    * Sets companyCountry
    *
    * @param string|null $companyCountry 国家，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：CN。
    *
    * @return $this
    */
    public function setCompanyCountry($companyCountry)
    {
        $this->container['companyCountry'] = $companyCountry;
        return $this;
    }

    /**
    * Gets companyProvince
    *  省份，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
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
    * @param string|null $companyProvince 省份，当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
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
    *  城市。当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
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
    * @param string|null $companyCity 城市。当“usage”取值为“ENTERPRISE”时，本参数必填。取值示例：北京市。
    *
    * @return $this
    */
    public function setCompanyCity($companyCity)
    {
        $this->container['companyCity'] = $companyCity;
        return $this;
    }

    /**
    * Gets companyName
    *  公司名称。当“usage”取值为“ENTERPRISE”时，本参数必填。
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
    * @param string|null $companyName 公司名称。当“usage”取值为“ENTERPRISE”时，本参数必填。
    *
    * @return $this
    */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;
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

