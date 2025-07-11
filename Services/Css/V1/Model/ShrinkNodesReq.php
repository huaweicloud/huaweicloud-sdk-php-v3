<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShrinkNodesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShrinkNodesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * migrateData  是否迁移数据。 - \"true\"：迁移数据。 - \"false\"：不迁移数据。
    * shrinkNodes  需要缩容的节点ID。  通过[查询集群详情](ShowClusterDetail.xml)获取instances中的id属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'migrateData' => 'string',
            'shrinkNodes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * migrateData  是否迁移数据。 - \"true\"：迁移数据。 - \"false\"：不迁移数据。
    * shrinkNodes  需要缩容的节点ID。  通过[查询集群详情](ShowClusterDetail.xml)获取instances中的id属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'migrateData' => null,
        'shrinkNodes' => null
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
    * migrateData  是否迁移数据。 - \"true\"：迁移数据。 - \"false\"：不迁移数据。
    * shrinkNodes  需要缩容的节点ID。  通过[查询集群详情](ShowClusterDetail.xml)获取instances中的id属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'migrateData' => 'migrate_data',
            'shrinkNodes' => 'shrink_nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * migrateData  是否迁移数据。 - \"true\"：迁移数据。 - \"false\"：不迁移数据。
    * shrinkNodes  需要缩容的节点ID。  通过[查询集群详情](ShowClusterDetail.xml)获取instances中的id属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'migrateData' => 'setMigrateData',
            'shrinkNodes' => 'setShrinkNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * migrateData  是否迁移数据。 - \"true\"：迁移数据。 - \"false\"：不迁移数据。
    * shrinkNodes  需要缩容的节点ID。  通过[查询集群详情](ShowClusterDetail.xml)获取instances中的id属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'migrateData' => 'getMigrateData',
            'shrinkNodes' => 'getShrinkNodes'
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
        $this->container['migrateData'] = isset($data['migrateData']) ? $data['migrateData'] : null;
        $this->container['shrinkNodes'] = isset($data['shrinkNodes']) ? $data['shrinkNodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['shrinkNodes'] === null) {
            $invalidProperties[] = "'shrinkNodes' can't be null";
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
    * Gets migrateData
    *  是否迁移数据。 - \"true\"：迁移数据。 - \"false\"：不迁移数据。
    *
    * @return string|null
    */
    public function getMigrateData()
    {
        return $this->container['migrateData'];
    }

    /**
    * Sets migrateData
    *
    * @param string|null $migrateData 是否迁移数据。 - \"true\"：迁移数据。 - \"false\"：不迁移数据。
    *
    * @return $this
    */
    public function setMigrateData($migrateData)
    {
        $this->container['migrateData'] = $migrateData;
        return $this;
    }

    /**
    * Gets shrinkNodes
    *  需要缩容的节点ID。  通过[查询集群详情](ShowClusterDetail.xml)获取instances中的id属性。
    *
    * @return string[]
    */
    public function getShrinkNodes()
    {
        return $this->container['shrinkNodes'];
    }

    /**
    * Sets shrinkNodes
    *
    * @param string[] $shrinkNodes 需要缩容的节点ID。  通过[查询集群详情](ShowClusterDetail.xml)获取instances中的id属性。
    *
    * @return $this
    */
    public function setShrinkNodes($shrinkNodes)
    {
        $this->container['shrinkNodes'] = $shrinkNodes;
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

