<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetQuota implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'setQuota';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID。
    * instanceQuota  实例个数配额。取值范围0~100000。(如果已经存在实例，应该大于已经存在的实例个数)
    * vcpusQuota  CPU核数配额。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的cpu个数)
    * ramQuota  内存使用配额，单位为GB。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的内存数)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'instanceQuota' => 'int',
            'vcpusQuota' => 'int',
            'ramQuota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目ID。
    * instanceQuota  实例个数配额。取值范围0~100000。(如果已经存在实例，应该大于已经存在的实例个数)
    * vcpusQuota  CPU核数配额。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的cpu个数)
    * ramQuota  内存使用配额，单位为GB。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的内存数)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'instanceQuota' => 'int32',
        'vcpusQuota' => 'int32',
        'ramQuota' => 'int32'
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
    * enterpriseProjectId  企业项目ID。
    * instanceQuota  实例个数配额。取值范围0~100000。(如果已经存在实例，应该大于已经存在的实例个数)
    * vcpusQuota  CPU核数配额。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的cpu个数)
    * ramQuota  内存使用配额，单位为GB。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的内存数)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'instanceQuota' => 'instance_quota',
            'vcpusQuota' => 'vcpus_quota',
            'ramQuota' => 'ram_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  企业项目ID。
    * instanceQuota  实例个数配额。取值范围0~100000。(如果已经存在实例，应该大于已经存在的实例个数)
    * vcpusQuota  CPU核数配额。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的cpu个数)
    * ramQuota  内存使用配额，单位为GB。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的内存数)
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'instanceQuota' => 'setInstanceQuota',
            'vcpusQuota' => 'setVcpusQuota',
            'ramQuota' => 'setRamQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  企业项目ID。
    * instanceQuota  实例个数配额。取值范围0~100000。(如果已经存在实例，应该大于已经存在的实例个数)
    * vcpusQuota  CPU核数配额。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的cpu个数)
    * ramQuota  内存使用配额，单位为GB。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的内存数)
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'instanceQuota' => 'getInstanceQuota',
            'vcpusQuota' => 'getVcpusQuota',
            'ramQuota' => 'getRamQuota'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['instanceQuota'] = isset($data['instanceQuota']) ? $data['instanceQuota'] : null;
        $this->container['vcpusQuota'] = isset($data['vcpusQuota']) ? $data['vcpusQuota'] : null;
        $this->container['ramQuota'] = isset($data['ramQuota']) ? $data['ramQuota'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
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
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets instanceQuota
    *  实例个数配额。取值范围0~100000。(如果已经存在实例，应该大于已经存在的实例个数)
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
    * @param int|null $instanceQuota 实例个数配额。取值范围0~100000。(如果已经存在实例，应该大于已经存在的实例个数)
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
    *  CPU核数配额。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的cpu个数)
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
    * @param int|null $vcpusQuota CPU核数配额。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的cpu个数)
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
    *  内存使用配额，单位为GB。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的内存数)
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
    * @param int|null $ramQuota 内存使用配额，单位为GB。取值范围0~2147483646。(如果已经存在实例，应该大于已经占用的内存数)
    *
    * @return $this
    */
    public function setRamQuota($ramQuota)
    {
        $this->container['ramQuota'] = $ramQuota;
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

