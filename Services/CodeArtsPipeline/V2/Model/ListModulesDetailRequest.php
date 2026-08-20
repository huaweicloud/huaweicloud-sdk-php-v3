<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListModulesDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListModulesDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectUuid  项目uuid
    * regionName  区域名
    * name  名称
    * productLine  产品线
    * tags  标签
    * offset  页码
    * limit  每页显示数
    * locations  扩展点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectUuid' => 'string',
            'regionName' => 'string',
            'name' => 'string',
            'productLine' => 'string',
            'tags' => 'string[]',
            'offset' => 'int',
            'limit' => 'int',
            'locations' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectUuid  项目uuid
    * regionName  区域名
    * name  名称
    * productLine  产品线
    * tags  标签
    * offset  页码
    * limit  每页显示数
    * locations  扩展点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectUuid' => null,
        'regionName' => null,
        'name' => null,
        'productLine' => null,
        'tags' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'locations' => null
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
    * projectUuid  项目uuid
    * regionName  区域名
    * name  名称
    * productLine  产品线
    * tags  标签
    * offset  页码
    * limit  每页显示数
    * locations  扩展点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectUuid' => 'project_uuid',
            'regionName' => 'region_name',
            'name' => 'name',
            'productLine' => 'productLine',
            'tags' => 'tags',
            'offset' => 'offset',
            'limit' => 'limit',
            'locations' => 'locations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectUuid  项目uuid
    * regionName  区域名
    * name  名称
    * productLine  产品线
    * tags  标签
    * offset  页码
    * limit  每页显示数
    * locations  扩展点
    *
    * @var string[]
    */
    protected static $setters = [
            'projectUuid' => 'setProjectUuid',
            'regionName' => 'setRegionName',
            'name' => 'setName',
            'productLine' => 'setProductLine',
            'tags' => 'setTags',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'locations' => 'setLocations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectUuid  项目uuid
    * regionName  区域名
    * name  名称
    * productLine  产品线
    * tags  标签
    * offset  页码
    * limit  每页显示数
    * locations  扩展点
    *
    * @var string[]
    */
    protected static $getters = [
            'projectUuid' => 'getProjectUuid',
            'regionName' => 'getRegionName',
            'name' => 'getName',
            'productLine' => 'getProductLine',
            'tags' => 'getTags',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'locations' => 'getLocations'
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
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['productLine'] = isset($data['productLine']) ? $data['productLine'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['locations'] === null) {
            $invalidProperties[] = "'locations' can't be null";
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
    * Gets projectUuid
    *  项目uuid
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目uuid
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets regionName
    *  区域名
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 区域名
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets productLine
    *  产品线
    *
    * @return string|null
    */
    public function getProductLine()
    {
        return $this->container['productLine'];
    }

    /**
    * Sets productLine
    *
    * @param string|null $productLine 产品线
    *
    * @return $this
    */
    public function setProductLine($productLine)
    {
        $this->container['productLine'] = $productLine;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets offset
    *  页码
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 页码
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets locations
    *  扩展点
    *
    * @return string[]
    */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
    * Sets locations
    *
    * @param string[] $locations 扩展点
    *
    * @return $this
    */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;
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

