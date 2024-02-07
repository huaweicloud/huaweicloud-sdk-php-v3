<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateGlobalEipRequestBodyGlobalEip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateGlobalEipRequestBody_global_eip';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  资源名称
    * description  用户自定义的资源描述
    * geipPoolName  全域弹性公网IP池子名称
    * accessSite  接入点信息
    * internetBandwidthInfo  internetBandwidthInfo
    * count  批创个数
    * tags  全域弹性公网IP标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'geipPoolName' => 'string',
            'accessSite' => 'string',
            'internetBandwidthInfo' => '\HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGlobalEipRequestBodyGlobalEipInternetBandwidthInfo',
            'count' => 'int',
            'tags' => '\HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequestBodyGlobalEipTags[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  资源名称
    * description  用户自定义的资源描述
    * geipPoolName  全域弹性公网IP池子名称
    * accessSite  接入点信息
    * internetBandwidthInfo  internetBandwidthInfo
    * count  批创个数
    * tags  全域弹性公网IP标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'geipPoolName' => null,
        'accessSite' => null,
        'internetBandwidthInfo' => null,
        'count' => 'int32',
        'tags' => null,
        'enterpriseProjectId' => null
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
    * name  资源名称
    * description  用户自定义的资源描述
    * geipPoolName  全域弹性公网IP池子名称
    * accessSite  接入点信息
    * internetBandwidthInfo  internetBandwidthInfo
    * count  批创个数
    * tags  全域弹性公网IP标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'geipPoolName' => 'geip_pool_name',
            'accessSite' => 'access_site',
            'internetBandwidthInfo' => 'internet_bandwidth_info',
            'count' => 'count',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  资源名称
    * description  用户自定义的资源描述
    * geipPoolName  全域弹性公网IP池子名称
    * accessSite  接入点信息
    * internetBandwidthInfo  internetBandwidthInfo
    * count  批创个数
    * tags  全域弹性公网IP标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'geipPoolName' => 'setGeipPoolName',
            'accessSite' => 'setAccessSite',
            'internetBandwidthInfo' => 'setInternetBandwidthInfo',
            'count' => 'setCount',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  资源名称
    * description  用户自定义的资源描述
    * geipPoolName  全域弹性公网IP池子名称
    * accessSite  接入点信息
    * internetBandwidthInfo  internetBandwidthInfo
    * count  批创个数
    * tags  全域弹性公网IP标签
    * enterpriseProjectId  资源的企业项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'geipPoolName' => 'getGeipPoolName',
            'accessSite' => 'getAccessSite',
            'internetBandwidthInfo' => 'getInternetBandwidthInfo',
            'count' => 'getCount',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['geipPoolName'] = isset($data['geipPoolName']) ? $data['geipPoolName'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['internetBandwidthInfo'] = isset($data['internetBandwidthInfo']) ? $data['internetBandwidthInfo'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4e00-\\u9fa5A-Za-z0-9_.-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5A-Za-z0-9_.-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['geipPoolName'] === null) {
            $invalidProperties[] = "'geipPoolName' can't be null";
        }
            if ((mb_strlen($this->container['geipPoolName']) > 64)) {
                $invalidProperties[] = "invalid value for 'geipPoolName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['geipPoolName']) < 1)) {
                $invalidProperties[] = "invalid value for 'geipPoolName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5A-Za-z0-9_.-]+$/", $this->container['geipPoolName'])) {
                $invalidProperties[] = "invalid value for 'geipPoolName', must be conform to the pattern /^[\\u4e00-\\u9fa5A-Za-z0-9_.-]+$/.";
            }
        if ($this->container['accessSite'] === null) {
            $invalidProperties[] = "'accessSite' can't be null";
        }
            if ((mb_strlen($this->container['accessSite']) > 64)) {
                $invalidProperties[] = "invalid value for 'accessSite', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['accessSite']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessSite', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-z]+-[a-z]+-[a-z0-9]+$/", $this->container['accessSite'])) {
                $invalidProperties[] = "invalid value for 'accessSite', must be conform to the pattern /^[a-z]+-[a-z]+-[a-z0-9]+$/.";
            }
        if ($this->container['internetBandwidthInfo'] === null) {
            $invalidProperties[] = "'internetBandwidthInfo' can't be null";
        }
            if (!is_null($this->container['count']) && ($this->container['count'] > 9999)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
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
    *  资源名称
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
    * @param string|null $name 资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  用户自定义的资源描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 用户自定义的资源描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets geipPoolName
    *  全域弹性公网IP池子名称
    *
    * @return string
    */
    public function getGeipPoolName()
    {
        return $this->container['geipPoolName'];
    }

    /**
    * Sets geipPoolName
    *
    * @param string $geipPoolName 全域弹性公网IP池子名称
    *
    * @return $this
    */
    public function setGeipPoolName($geipPoolName)
    {
        $this->container['geipPoolName'] = $geipPoolName;
        return $this;
    }

    /**
    * Gets accessSite
    *  接入点信息
    *
    * @return string
    */
    public function getAccessSite()
    {
        return $this->container['accessSite'];
    }

    /**
    * Sets accessSite
    *
    * @param string $accessSite 接入点信息
    *
    * @return $this
    */
    public function setAccessSite($accessSite)
    {
        $this->container['accessSite'] = $accessSite;
        return $this;
    }

    /**
    * Gets internetBandwidthInfo
    *  internetBandwidthInfo
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGlobalEipRequestBodyGlobalEipInternetBandwidthInfo
    */
    public function getInternetBandwidthInfo()
    {
        return $this->container['internetBandwidthInfo'];
    }

    /**
    * Sets internetBandwidthInfo
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\BatchCreateGlobalEipRequestBodyGlobalEipInternetBandwidthInfo $internetBandwidthInfo internetBandwidthInfo
    *
    * @return $this
    */
    public function setInternetBandwidthInfo($internetBandwidthInfo)
    {
        $this->container['internetBandwidthInfo'] = $internetBandwidthInfo;
        return $this;
    }

    /**
    * Gets count
    *  批创个数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 批创个数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets tags
    *  全域弹性公网IP标签
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequestBodyGlobalEipTags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequestBodyGlobalEipTags[]|null $tags 全域弹性公网IP标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  资源的企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 资源的企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

