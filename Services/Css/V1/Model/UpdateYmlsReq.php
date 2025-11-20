<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateYmlsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateYmlsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edit  edit
    * instType  节点类型 目前koosearch集群涉及不同类型的节点。 kos: koosearch的搜索中控节点 kos-doc: koosearch的文档解析节点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edit' => '\HuaweiCloud\SDK\Css\V1\Model\UpdateYmlsReqEdit',
            'instType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edit  edit
    * instType  节点类型 目前koosearch集群涉及不同类型的节点。 kos: koosearch的搜索中控节点 kos-doc: koosearch的文档解析节点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edit' => null,
        'instType' => null
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
    * edit  edit
    * instType  节点类型 目前koosearch集群涉及不同类型的节点。 kos: koosearch的搜索中控节点 kos-doc: koosearch的文档解析节点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edit' => 'edit',
            'instType' => 'inst_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edit  edit
    * instType  节点类型 目前koosearch集群涉及不同类型的节点。 kos: koosearch的搜索中控节点 kos-doc: koosearch的文档解析节点
    *
    * @var string[]
    */
    protected static $setters = [
            'edit' => 'setEdit',
            'instType' => 'setInstType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edit  edit
    * instType  节点类型 目前koosearch集群涉及不同类型的节点。 kos: koosearch的搜索中控节点 kos-doc: koosearch的文档解析节点
    *
    * @var string[]
    */
    protected static $getters = [
            'edit' => 'getEdit',
            'instType' => 'getInstType'
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
    const INST_TYPE_KOS = 'kos';
    const INST_TYPE_KOS_DOC = 'kos-doc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstTypeAllowableValues()
    {
        return [
            self::INST_TYPE_KOS,
            self::INST_TYPE_KOS_DOC,
        ];
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
        $this->container['edit'] = isset($data['edit']) ? $data['edit'] : null;
        $this->container['instType'] = isset($data['instType']) ? $data['instType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['edit'] === null) {
            $invalidProperties[] = "'edit' can't be null";
        }
            $allowedValues = $this->getInstTypeAllowableValues();
                if (!is_null($this->container['instType']) && !in_array($this->container['instType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets edit
    *  edit
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\UpdateYmlsReqEdit
    */
    public function getEdit()
    {
        return $this->container['edit'];
    }

    /**
    * Sets edit
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\UpdateYmlsReqEdit $edit edit
    *
    * @return $this
    */
    public function setEdit($edit)
    {
        $this->container['edit'] = $edit;
        return $this;
    }

    /**
    * Gets instType
    *  节点类型 目前koosearch集群涉及不同类型的节点。 kos: koosearch的搜索中控节点 kos-doc: koosearch的文档解析节点
    *
    * @return string|null
    */
    public function getInstType()
    {
        return $this->container['instType'];
    }

    /**
    * Sets instType
    *
    * @param string|null $instType 节点类型 目前koosearch集群涉及不同类型的节点。 kos: koosearch的搜索中控节点 kos-doc: koosearch的文档解析节点
    *
    * @return $this
    */
    public function setInstType($instType)
    {
        $this->container['instType'] = $instType;
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

