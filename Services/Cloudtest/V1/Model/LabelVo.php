<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LabelVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LabelVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  uri主键
    * region  逻辑region
    * labelName  标签名称
    * serviceType  服务类型
    * resourceType  所属资源类型（TestCase：用例，Task：测试套）
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'region' => 'string',
            'labelName' => 'string',
            'serviceType' => 'string',
            'resourceType' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  uri主键
    * region  逻辑region
    * labelName  标签名称
    * serviceType  服务类型
    * resourceType  所属资源类型（TestCase：用例，Task：测试套）
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'region' => null,
        'labelName' => null,
        'serviceType' => null,
        'resourceType' => null,
        'projectId' => null
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
    * uri  uri主键
    * region  逻辑region
    * labelName  标签名称
    * serviceType  服务类型
    * resourceType  所属资源类型（TestCase：用例，Task：测试套）
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'region' => 'region',
            'labelName' => 'label_name',
            'serviceType' => 'service_type',
            'resourceType' => 'resource_type',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  uri主键
    * region  逻辑region
    * labelName  标签名称
    * serviceType  服务类型
    * resourceType  所属资源类型（TestCase：用例，Task：测试套）
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'region' => 'setRegion',
            'labelName' => 'setLabelName',
            'serviceType' => 'setServiceType',
            'resourceType' => 'setResourceType',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  uri主键
    * region  逻辑region
    * labelName  标签名称
    * serviceType  服务类型
    * resourceType  所属资源类型（TestCase：用例，Task：测试套）
    * projectId  项目ID
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'region' => 'getRegion',
            'labelName' => 'getLabelName',
            'serviceType' => 'getServiceType',
            'resourceType' => 'getResourceType',
            'projectId' => 'getProjectId'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['labelName'] = isset($data['labelName']) ? $data['labelName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets uri
    *  uri主键
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri uri主键
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets region
    *  逻辑region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 逻辑region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets labelName
    *  标签名称
    *
    * @return string|null
    */
    public function getLabelName()
    {
        return $this->container['labelName'];
    }

    /**
    * Sets labelName
    *
    * @param string|null $labelName 标签名称
    *
    * @return $this
    */
    public function setLabelName($labelName)
    {
        $this->container['labelName'] = $labelName;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  所属资源类型（TestCase：用例，Task：测试套）
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 所属资源类型（TestCase：用例，Task：测试套）
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

