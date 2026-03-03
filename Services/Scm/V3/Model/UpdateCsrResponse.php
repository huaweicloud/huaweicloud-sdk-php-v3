<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCsrResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCsrResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  CSR的ID。
    * name  CSR名称。
    * csr  CSR内容。
    * domainName  CSR绑定的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  密钥算法。
    * usage  CSR用途。
    * companyCountry  国家。
    * companyProvince  省份。
    * companyCity  城市。
    * companyName  公司名称。
    * createTime  CSR创建时间。
    * updateTime  CSR更新时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'csr' => 'string',
            'domainName' => 'string',
            'sans' => 'string',
            'privateKeyAlgo' => 'string',
            'usage' => 'string',
            'companyCountry' => 'string',
            'companyProvince' => 'string',
            'companyCity' => 'string',
            'companyName' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  CSR的ID。
    * name  CSR名称。
    * csr  CSR内容。
    * domainName  CSR绑定的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  密钥算法。
    * usage  CSR用途。
    * companyCountry  国家。
    * companyProvince  省份。
    * companyCity  城市。
    * companyName  公司名称。
    * createTime  CSR创建时间。
    * updateTime  CSR更新时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'csr' => null,
        'domainName' => null,
        'sans' => null,
        'privateKeyAlgo' => null,
        'usage' => null,
        'companyCountry' => null,
        'companyProvince' => null,
        'companyCity' => null,
        'companyName' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * id  CSR的ID。
    * name  CSR名称。
    * csr  CSR内容。
    * domainName  CSR绑定的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  密钥算法。
    * usage  CSR用途。
    * companyCountry  国家。
    * companyProvince  省份。
    * companyCity  城市。
    * companyName  公司名称。
    * createTime  CSR创建时间。
    * updateTime  CSR更新时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'csr' => 'csr',
            'domainName' => 'domain_name',
            'sans' => 'sans',
            'privateKeyAlgo' => 'private_key_algo',
            'usage' => 'usage',
            'companyCountry' => 'company_country',
            'companyProvince' => 'company_province',
            'companyCity' => 'company_city',
            'companyName' => 'company_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  CSR的ID。
    * name  CSR名称。
    * csr  CSR内容。
    * domainName  CSR绑定的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  密钥算法。
    * usage  CSR用途。
    * companyCountry  国家。
    * companyProvince  省份。
    * companyCity  城市。
    * companyName  公司名称。
    * createTime  CSR创建时间。
    * updateTime  CSR更新时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'csr' => 'setCsr',
            'domainName' => 'setDomainName',
            'sans' => 'setSans',
            'privateKeyAlgo' => 'setPrivateKeyAlgo',
            'usage' => 'setUsage',
            'companyCountry' => 'setCompanyCountry',
            'companyProvince' => 'setCompanyProvince',
            'companyCity' => 'setCompanyCity',
            'companyName' => 'setCompanyName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  CSR的ID。
    * name  CSR名称。
    * csr  CSR内容。
    * domainName  CSR绑定的域名。
    * sans  CSR绑定的附加域名。
    * privateKeyAlgo  密钥算法。
    * usage  CSR用途。
    * companyCountry  国家。
    * companyProvince  省份。
    * companyCity  城市。
    * companyName  公司名称。
    * createTime  CSR创建时间。
    * updateTime  CSR更新时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'csr' => 'getCsr',
            'domainName' => 'getDomainName',
            'sans' => 'getSans',
            'privateKeyAlgo' => 'getPrivateKeyAlgo',
            'usage' => 'getUsage',
            'companyCountry' => 'getCompanyCountry',
            'companyProvince' => 'getCompanyProvince',
            'companyCity' => 'getCompanyCity',
            'companyName' => 'getCompanyName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['csr'] = isset($data['csr']) ? $data['csr'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['sans'] = isset($data['sans']) ? $data['sans'] : null;
        $this->container['privateKeyAlgo'] = isset($data['privateKeyAlgo']) ? $data['privateKeyAlgo'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['companyCountry'] = isset($data['companyCountry']) ? $data['companyCountry'] : null;
        $this->container['companyProvince'] = isset($data['companyProvince']) ? $data['companyProvince'] : null;
        $this->container['companyCity'] = isset($data['companyCity']) ? $data['companyCity'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 16)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 16)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 63)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['csr']) && (mb_strlen($this->container['csr']) > 255)) {
                $invalidProperties[] = "invalid value for 'csr', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['csr']) && (mb_strlen($this->container['csr']) < 3)) {
                $invalidProperties[] = "invalid value for 'csr', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 255)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) > 4096)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['sans']) && (mb_strlen($this->container['sans']) < 1)) {
                $invalidProperties[] = "invalid value for 'sans', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateKeyAlgo']) && (mb_strlen($this->container['privateKeyAlgo']) > 64)) {
                $invalidProperties[] = "invalid value for 'privateKeyAlgo', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['privateKeyAlgo']) && (mb_strlen($this->container['privateKeyAlgo']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateKeyAlgo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usage']) && (mb_strlen($this->container['usage']) > 64)) {
                $invalidProperties[] = "invalid value for 'usage', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['usage']) && (mb_strlen($this->container['usage']) < 0)) {
                $invalidProperties[] = "invalid value for 'usage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['companyCountry']) && (mb_strlen($this->container['companyCountry']) > 128)) {
                $invalidProperties[] = "invalid value for 'companyCountry', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['companyCountry']) && (mb_strlen($this->container['companyCountry']) < 1)) {
                $invalidProperties[] = "invalid value for 'companyCountry', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['companyProvince']) && (mb_strlen($this->container['companyProvince']) > 255)) {
                $invalidProperties[] = "invalid value for 'companyProvince', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['companyProvince']) && (mb_strlen($this->container['companyProvince']) < 1)) {
                $invalidProperties[] = "invalid value for 'companyProvince', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['companyCity']) && (mb_strlen($this->container['companyCity']) > 32)) {
                $invalidProperties[] = "invalid value for 'companyCity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['companyCity']) && (mb_strlen($this->container['companyCity']) < 1)) {
                $invalidProperties[] = "invalid value for 'companyCity', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['companyName']) && (mb_strlen($this->container['companyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'companyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 13)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 13)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 13.";
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
    * Gets id
    *  CSR的ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id CSR的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  CSR名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name CSR名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets csr
    *  CSR内容。
    *
    * @return string|null
    */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
    * Sets csr
    *
    * @param string|null $csr CSR内容。
    *
    * @return $this
    */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;
        return $this;
    }

    /**
    * Gets domainName
    *  CSR绑定的域名。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName CSR绑定的域名。
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
    *  密钥算法。
    *
    * @return string|null
    */
    public function getPrivateKeyAlgo()
    {
        return $this->container['privateKeyAlgo'];
    }

    /**
    * Sets privateKeyAlgo
    *
    * @param string|null $privateKeyAlgo 密钥算法。
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
    *  CSR用途。
    *
    * @return string|null
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param string|null $usage CSR用途。
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
    *  国家。
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
    * @param string|null $companyCountry 国家。
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
    *  省份。
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
    * @param string|null $companyProvince 省份。
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
    *  城市。
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
    * @param string|null $companyCity 城市。
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
    * Gets createTime
    *  CSR创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime CSR创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  CSR更新时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime CSR更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

