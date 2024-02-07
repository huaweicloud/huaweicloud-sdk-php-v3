<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateInternetBandwidthRequestBodyInternetBandwidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateInternetBandwidthRequestBody_internet_bandwidth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * isp  线路
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * name  资源名称
    * description  用户自定义的资源描述
    * count  批创个数
    * tags  全域公网带宽标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ingressSize' => 'int',
            'chargeMode' => 'string',
            'isp' => 'string',
            'accessSite' => 'string',
            'size' => 'int',
            'name' => 'string',
            'description' => 'string',
            'count' => 'int',
            'tags' => '\HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequestBodyGlobalEipTags[]',
            'enterpriseProjectId' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * isp  线路
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * name  资源名称
    * description  用户自定义的资源描述
    * count  批创个数
    * tags  全域公网带宽标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ingressSize' => 'int32',
        'chargeMode' => null,
        'isp' => null,
        'accessSite' => null,
        'size' => 'int32',
        'name' => null,
        'description' => null,
        'count' => 'int32',
        'tags' => null,
        'enterpriseProjectId' => null,
        'type' => null
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
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * isp  线路
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * name  资源名称
    * description  用户自定义的资源描述
    * count  批创个数
    * tags  全域公网带宽标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ingressSize' => 'ingress_size',
            'chargeMode' => 'charge_mode',
            'isp' => 'isp',
            'accessSite' => 'access_site',
            'size' => 'size',
            'name' => 'name',
            'description' => 'description',
            'count' => 'count',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * isp  线路
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * name  资源名称
    * description  用户自定义的资源描述
    * count  批创个数
    * tags  全域公网带宽标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $setters = [
            'ingressSize' => 'setIngressSize',
            'chargeMode' => 'setChargeMode',
            'isp' => 'setIsp',
            'accessSite' => 'setAccessSite',
            'size' => 'setSize',
            'name' => 'setName',
            'description' => 'setDescription',
            'count' => 'setCount',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ingressSize  全域公网带宽大小（入云方向）
    * chargeMode  计费模式
    * isp  线路
    * accessSite  接入点信息
    * size  全域公网带宽大小（出云方向）
    * name  资源名称
    * description  用户自定义的资源描述
    * count  批创个数
    * tags  全域公网带宽标签
    * enterpriseProjectId  资源的企业项目id
    * type  全域公网带宽类型
    *
    * @var string[]
    */
    protected static $getters = [
            'ingressSize' => 'getIngressSize',
            'chargeMode' => 'getChargeMode',
            'isp' => 'getIsp',
            'accessSite' => 'getAccessSite',
            'size' => 'getSize',
            'name' => 'getName',
            'description' => 'getDescription',
            'count' => 'getCount',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType'
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
        $this->container['ingressSize'] = isset($data['ingressSize']) ? $data['ingressSize'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ingressSize']) && ($this->container['ingressSize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ingressSize', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ingressSize']) && ($this->container['ingressSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'ingressSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 36)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['isp'] === null) {
            $invalidProperties[] = "'isp' can't be null";
        }
            if ((mb_strlen($this->container['isp']) > 64)) {
                $invalidProperties[] = "invalid value for 'isp', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['isp']) < 1)) {
                $invalidProperties[] = "invalid value for 'isp', the character length must be bigger than or equal to 1.";
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
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
            if (($this->container['size'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['size'] < 1)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
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
    * Gets ingressSize
    *  全域公网带宽大小（入云方向）
    *
    * @return int|null
    */
    public function getIngressSize()
    {
        return $this->container['ingressSize'];
    }

    /**
    * Sets ingressSize
    *
    * @param int|null $ingressSize 全域公网带宽大小（入云方向）
    *
    * @return $this
    */
    public function setIngressSize($ingressSize)
    {
        $this->container['ingressSize'] = $ingressSize;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 计费模式
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets isp
    *  线路
    *
    * @return string
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string $isp 线路
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
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
    * Gets size
    *  全域公网带宽大小（出云方向）
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size 全域公网带宽大小（出云方向）
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
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
    *  全域公网带宽标签
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
    * @param \HuaweiCloud\SDK\Geip\V3\Model\CreateGlobalEipRequestBodyGlobalEipTags[]|null $tags 全域公网带宽标签
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
    * Gets type
    *  全域公网带宽类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 全域公网带宽类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

