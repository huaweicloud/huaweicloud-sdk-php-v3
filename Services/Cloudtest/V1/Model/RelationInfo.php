<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RelationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RelationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * drNumber  需求id
    * testCaseUri  用例uri
    * relateType  资源类型
    * resourceType  资源类型
    * sourceSystem  来源系统
    * associationNumber  关联资源编号
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'drNumber' => 'string',
            'testCaseUri' => 'string',
            'relateType' => 'string',
            'resourceType' => 'string',
            'sourceSystem' => 'string',
            'associationNumber' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * drNumber  需求id
    * testCaseUri  用例uri
    * relateType  资源类型
    * resourceType  资源类型
    * sourceSystem  来源系统
    * associationNumber  关联资源编号
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'drNumber' => null,
        'testCaseUri' => null,
        'relateType' => null,
        'resourceType' => null,
        'sourceSystem' => null,
        'associationNumber' => null,
        'region' => null
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
    * drNumber  需求id
    * testCaseUri  用例uri
    * relateType  资源类型
    * resourceType  资源类型
    * sourceSystem  来源系统
    * associationNumber  关联资源编号
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'drNumber' => 'dr_number',
            'testCaseUri' => 'test_case_uri',
            'relateType' => 'relate_type',
            'resourceType' => 'resource_type',
            'sourceSystem' => 'source_system',
            'associationNumber' => 'association_number',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * drNumber  需求id
    * testCaseUri  用例uri
    * relateType  资源类型
    * resourceType  资源类型
    * sourceSystem  来源系统
    * associationNumber  关联资源编号
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    *
    * @var string[]
    */
    protected static $setters = [
            'drNumber' => 'setDrNumber',
            'testCaseUri' => 'setTestCaseUri',
            'relateType' => 'setRelateType',
            'resourceType' => 'setResourceType',
            'sourceSystem' => 'setSourceSystem',
            'associationNumber' => 'setAssociationNumber',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * drNumber  需求id
    * testCaseUri  用例uri
    * relateType  资源类型
    * resourceType  资源类型
    * sourceSystem  来源系统
    * associationNumber  关联资源编号
    * region  逻辑region，外部使用公有云实际区域，内部使用默认值
    *
    * @var string[]
    */
    protected static $getters = [
            'drNumber' => 'getDrNumber',
            'testCaseUri' => 'getTestCaseUri',
            'relateType' => 'getRelateType',
            'resourceType' => 'getResourceType',
            'sourceSystem' => 'getSourceSystem',
            'associationNumber' => 'getAssociationNumber',
            'region' => 'getRegion'
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
        $this->container['drNumber'] = isset($data['drNumber']) ? $data['drNumber'] : null;
        $this->container['testCaseUri'] = isset($data['testCaseUri']) ? $data['testCaseUri'] : null;
        $this->container['relateType'] = isset($data['relateType']) ? $data['relateType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['sourceSystem'] = isset($data['sourceSystem']) ? $data['sourceSystem'] : null;
        $this->container['associationNumber'] = isset($data['associationNumber']) ? $data['associationNumber'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['drNumber'] === null) {
            $invalidProperties[] = "'drNumber' can't be null";
        }
        if ($this->container['relateType'] === null) {
            $invalidProperties[] = "'relateType' can't be null";
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
    * Gets drNumber
    *  需求id
    *
    * @return string
    */
    public function getDrNumber()
    {
        return $this->container['drNumber'];
    }

    /**
    * Sets drNumber
    *
    * @param string $drNumber 需求id
    *
    * @return $this
    */
    public function setDrNumber($drNumber)
    {
        $this->container['drNumber'] = $drNumber;
        return $this;
    }

    /**
    * Gets testCaseUri
    *  用例uri
    *
    * @return string|null
    */
    public function getTestCaseUri()
    {
        return $this->container['testCaseUri'];
    }

    /**
    * Sets testCaseUri
    *
    * @param string|null $testCaseUri 用例uri
    *
    * @return $this
    */
    public function setTestCaseUri($testCaseUri)
    {
        $this->container['testCaseUri'] = $testCaseUri;
        return $this;
    }

    /**
    * Gets relateType
    *  资源类型
    *
    * @return string
    */
    public function getRelateType()
    {
        return $this->container['relateType'];
    }

    /**
    * Sets relateType
    *
    * @param string $relateType 资源类型
    *
    * @return $this
    */
    public function setRelateType($relateType)
    {
        $this->container['relateType'] = $relateType;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
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
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets sourceSystem
    *  来源系统
    *
    * @return string|null
    */
    public function getSourceSystem()
    {
        return $this->container['sourceSystem'];
    }

    /**
    * Sets sourceSystem
    *
    * @param string|null $sourceSystem 来源系统
    *
    * @return $this
    */
    public function setSourceSystem($sourceSystem)
    {
        $this->container['sourceSystem'] = $sourceSystem;
        return $this;
    }

    /**
    * Gets associationNumber
    *  关联资源编号
    *
    * @return string|null
    */
    public function getAssociationNumber()
    {
        return $this->container['associationNumber'];
    }

    /**
    * Sets associationNumber
    *
    * @param string|null $associationNumber 关联资源编号
    *
    * @return $this
    */
    public function setAssociationNumber($associationNumber)
    {
        $this->container['associationNumber'] = $associationNumber;
        return $this;
    }

    /**
    * Gets region
    *  逻辑region，外部使用公有云实际区域，内部使用默认值
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
    * @param string|null $region 逻辑region，外部使用公有云实际区域，内部使用默认值
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

