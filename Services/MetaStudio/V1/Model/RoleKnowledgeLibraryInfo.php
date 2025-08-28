<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleKnowledgeLibraryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleKnowledgeLibraryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * knowledgeType  knowledgeType
    * knowledgeLibraryInfoList  知识库列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'knowledgeType' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeTypeEnum',
            'knowledgeLibraryInfoList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeLibraryBaseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * knowledgeType  knowledgeType
    * knowledgeLibraryInfoList  知识库列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'knowledgeType' => null,
        'knowledgeLibraryInfoList' => null
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
    * knowledgeType  knowledgeType
    * knowledgeLibraryInfoList  知识库列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'knowledgeType' => 'knowledge_type',
            'knowledgeLibraryInfoList' => 'knowledge_library_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * knowledgeType  knowledgeType
    * knowledgeLibraryInfoList  知识库列表
    *
    * @var string[]
    */
    protected static $setters = [
            'knowledgeType' => 'setKnowledgeType',
            'knowledgeLibraryInfoList' => 'setKnowledgeLibraryInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * knowledgeType  knowledgeType
    * knowledgeLibraryInfoList  知识库列表
    *
    * @var string[]
    */
    protected static $getters = [
            'knowledgeType' => 'getKnowledgeType',
            'knowledgeLibraryInfoList' => 'getKnowledgeLibraryInfoList'
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
        $this->container['knowledgeType'] = isset($data['knowledgeType']) ? $data['knowledgeType'] : null;
        $this->container['knowledgeLibraryInfoList'] = isset($data['knowledgeLibraryInfoList']) ? $data['knowledgeLibraryInfoList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['knowledgeType'] === null) {
            $invalidProperties[] = "'knowledgeType' can't be null";
        }
        if ($this->container['knowledgeLibraryInfoList'] === null) {
            $invalidProperties[] = "'knowledgeLibraryInfoList' can't be null";
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
    * Gets knowledgeType
    *  knowledgeType
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeTypeEnum
    */
    public function getKnowledgeType()
    {
        return $this->container['knowledgeType'];
    }

    /**
    * Sets knowledgeType
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeTypeEnum $knowledgeType knowledgeType
    *
    * @return $this
    */
    public function setKnowledgeType($knowledgeType)
    {
        $this->container['knowledgeType'] = $knowledgeType;
        return $this;
    }

    /**
    * Gets knowledgeLibraryInfoList
    *  知识库列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeLibraryBaseInfo[]
    */
    public function getKnowledgeLibraryInfoList()
    {
        return $this->container['knowledgeLibraryInfoList'];
    }

    /**
    * Sets knowledgeLibraryInfoList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\KnowledgeLibraryBaseInfo[] $knowledgeLibraryInfoList 知识库列表
    *
    * @return $this
    */
    public function setKnowledgeLibraryInfoList($knowledgeLibraryInfoList)
    {
        $this->container['knowledgeLibraryInfoList'] = $knowledgeLibraryInfoList;
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

