<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EpsQuotasOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EpsQuotasOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectsId  企业项目Id。
    * instanceQuota  实例的配额。取值范围：实际创建的实例个数 ~ 100,000。
    * vcpusQuota  cpu的配额。取值范围：实际使用的cpu核数 ~ 2,147,483,646。
    * ramQuota  内存的配额。单位GB。取值范围：实际使用的内存 ~ 2,147,483,646。
    * volumeQuota  存储空间的配额。单位：GB。取值范围：实际使用的存储空间 ~ 2,147,483,646。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectsId' => 'string',
            'instanceQuota' => 'int',
            'vcpusQuota' => 'int',
            'ramQuota' => 'int',
            'volumeQuota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectsId  企业项目Id。
    * instanceQuota  实例的配额。取值范围：实际创建的实例个数 ~ 100,000。
    * vcpusQuota  cpu的配额。取值范围：实际使用的cpu核数 ~ 2,147,483,646。
    * ramQuota  内存的配额。单位GB。取值范围：实际使用的内存 ~ 2,147,483,646。
    * volumeQuota  存储空间的配额。单位：GB。取值范围：实际使用的存储空间 ~ 2,147,483,646。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectsId' => null,
        'instanceQuota' => null,
        'vcpusQuota' => null,
        'ramQuota' => null,
        'volumeQuota' => null
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
    * enterpriseProjectsId  企业项目Id。
    * instanceQuota  实例的配额。取值范围：实际创建的实例个数 ~ 100,000。
    * vcpusQuota  cpu的配额。取值范围：实际使用的cpu核数 ~ 2,147,483,646。
    * ramQuota  内存的配额。单位GB。取值范围：实际使用的内存 ~ 2,147,483,646。
    * volumeQuota  存储空间的配额。单位：GB。取值范围：实际使用的存储空间 ~ 2,147,483,646。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectsId' => 'enterprise_projects_id',
            'instanceQuota' => 'instance_quota',
            'vcpusQuota' => 'vcpus_quota',
            'ramQuota' => 'ram_quota',
            'volumeQuota' => 'volume_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectsId  企业项目Id。
    * instanceQuota  实例的配额。取值范围：实际创建的实例个数 ~ 100,000。
    * vcpusQuota  cpu的配额。取值范围：实际使用的cpu核数 ~ 2,147,483,646。
    * ramQuota  内存的配额。单位GB。取值范围：实际使用的内存 ~ 2,147,483,646。
    * volumeQuota  存储空间的配额。单位：GB。取值范围：实际使用的存储空间 ~ 2,147,483,646。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectsId' => 'setEnterpriseProjectsId',
            'instanceQuota' => 'setInstanceQuota',
            'vcpusQuota' => 'setVcpusQuota',
            'ramQuota' => 'setRamQuota',
            'volumeQuota' => 'setVolumeQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectsId  企业项目Id。
    * instanceQuota  实例的配额。取值范围：实际创建的实例个数 ~ 100,000。
    * vcpusQuota  cpu的配额。取值范围：实际使用的cpu核数 ~ 2,147,483,646。
    * ramQuota  内存的配额。单位GB。取值范围：实际使用的内存 ~ 2,147,483,646。
    * volumeQuota  存储空间的配额。单位：GB。取值范围：实际使用的存储空间 ~ 2,147,483,646。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectsId' => 'getEnterpriseProjectsId',
            'instanceQuota' => 'getInstanceQuota',
            'vcpusQuota' => 'getVcpusQuota',
            'ramQuota' => 'getRamQuota',
            'volumeQuota' => 'getVolumeQuota'
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
        $this->container['enterpriseProjectsId'] = isset($data['enterpriseProjectsId']) ? $data['enterpriseProjectsId'] : null;
        $this->container['instanceQuota'] = isset($data['instanceQuota']) ? $data['instanceQuota'] : null;
        $this->container['vcpusQuota'] = isset($data['vcpusQuota']) ? $data['vcpusQuota'] : null;
        $this->container['ramQuota'] = isset($data['ramQuota']) ? $data['ramQuota'] : null;
        $this->container['volumeQuota'] = isset($data['volumeQuota']) ? $data['volumeQuota'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enterpriseProjectsId'] === null) {
            $invalidProperties[] = "'enterpriseProjectsId' can't be null";
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
    * Gets enterpriseProjectsId
    *  企业项目Id。
    *
    * @return string
    */
    public function getEnterpriseProjectsId()
    {
        return $this->container['enterpriseProjectsId'];
    }

    /**
    * Sets enterpriseProjectsId
    *
    * @param string $enterpriseProjectsId 企业项目Id。
    *
    * @return $this
    */
    public function setEnterpriseProjectsId($enterpriseProjectsId)
    {
        $this->container['enterpriseProjectsId'] = $enterpriseProjectsId;
        return $this;
    }

    /**
    * Gets instanceQuota
    *  实例的配额。取值范围：实际创建的实例个数 ~ 100,000。
    *
    * @return int|null
    */
    public function getInstanceQuota()
    {
        return $this->container['instanceQuota'];
    }

    /**
    * Sets instanceQuota
    *
    * @param int|null $instanceQuota 实例的配额。取值范围：实际创建的实例个数 ~ 100,000。
    *
    * @return $this
    */
    public function setInstanceQuota($instanceQuota)
    {
        $this->container['instanceQuota'] = $instanceQuota;
        return $this;
    }

    /**
    * Gets vcpusQuota
    *  cpu的配额。取值范围：实际使用的cpu核数 ~ 2,147,483,646。
    *
    * @return int|null
    */
    public function getVcpusQuota()
    {
        return $this->container['vcpusQuota'];
    }

    /**
    * Sets vcpusQuota
    *
    * @param int|null $vcpusQuota cpu的配额。取值范围：实际使用的cpu核数 ~ 2,147,483,646。
    *
    * @return $this
    */
    public function setVcpusQuota($vcpusQuota)
    {
        $this->container['vcpusQuota'] = $vcpusQuota;
        return $this;
    }

    /**
    * Gets ramQuota
    *  内存的配额。单位GB。取值范围：实际使用的内存 ~ 2,147,483,646。
    *
    * @return int|null
    */
    public function getRamQuota()
    {
        return $this->container['ramQuota'];
    }

    /**
    * Sets ramQuota
    *
    * @param int|null $ramQuota 内存的配额。单位GB。取值范围：实际使用的内存 ~ 2,147,483,646。
    *
    * @return $this
    */
    public function setRamQuota($ramQuota)
    {
        $this->container['ramQuota'] = $ramQuota;
        return $this;
    }

    /**
    * Gets volumeQuota
    *  存储空间的配额。单位：GB。取值范围：实际使用的存储空间 ~ 2,147,483,646。
    *
    * @return int|null
    */
    public function getVolumeQuota()
    {
        return $this->container['volumeQuota'];
    }

    /**
    * Sets volumeQuota
    *
    * @param int|null $volumeQuota 存储空间的配额。单位：GB。取值范围：实际使用的存储空间 ~ 2,147,483,646。
    *
    * @return $this
    */
    public function setVolumeQuota($volumeQuota)
    {
        $this->container['volumeQuota'] = $volumeQuota;
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

