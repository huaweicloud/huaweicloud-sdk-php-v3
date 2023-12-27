<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowShrinkCheckResponseBodyCheckDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowShrinkCheckResponseBody_check_detail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * brokerId  broker序号
    * canDelete  节点是否可删除。
    * isZkNode  节点是否为zk部署节点。
    * isController  broker是否为controller。
    * hasTopics  broker上是否存在topic数据。
    * topics  broker上存在的topic列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'brokerId' => 'int',
            'canDelete' => 'bool',
            'isZkNode' => 'bool',
            'isController' => 'bool',
            'hasTopics' => 'bool',
            'topics' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * brokerId  broker序号
    * canDelete  节点是否可删除。
    * isZkNode  节点是否为zk部署节点。
    * isController  broker是否为controller。
    * hasTopics  broker上是否存在topic数据。
    * topics  broker上存在的topic列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'brokerId' => null,
        'canDelete' => null,
        'isZkNode' => null,
        'isController' => null,
        'hasTopics' => null,
        'topics' => null
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
    * brokerId  broker序号
    * canDelete  节点是否可删除。
    * isZkNode  节点是否为zk部署节点。
    * isController  broker是否为controller。
    * hasTopics  broker上是否存在topic数据。
    * topics  broker上存在的topic列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'brokerId' => 'broker_id',
            'canDelete' => 'can_delete',
            'isZkNode' => 'is_zk_node',
            'isController' => 'is_controller',
            'hasTopics' => 'has_topics',
            'topics' => 'topics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * brokerId  broker序号
    * canDelete  节点是否可删除。
    * isZkNode  节点是否为zk部署节点。
    * isController  broker是否为controller。
    * hasTopics  broker上是否存在topic数据。
    * topics  broker上存在的topic列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'brokerId' => 'setBrokerId',
            'canDelete' => 'setCanDelete',
            'isZkNode' => 'setIsZkNode',
            'isController' => 'setIsController',
            'hasTopics' => 'setHasTopics',
            'topics' => 'setTopics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * brokerId  broker序号
    * canDelete  节点是否可删除。
    * isZkNode  节点是否为zk部署节点。
    * isController  broker是否为controller。
    * hasTopics  broker上是否存在topic数据。
    * topics  broker上存在的topic列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'brokerId' => 'getBrokerId',
            'canDelete' => 'getCanDelete',
            'isZkNode' => 'getIsZkNode',
            'isController' => 'getIsController',
            'hasTopics' => 'getHasTopics',
            'topics' => 'getTopics'
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
        $this->container['brokerId'] = isset($data['brokerId']) ? $data['brokerId'] : null;
        $this->container['canDelete'] = isset($data['canDelete']) ? $data['canDelete'] : null;
        $this->container['isZkNode'] = isset($data['isZkNode']) ? $data['isZkNode'] : null;
        $this->container['isController'] = isset($data['isController']) ? $data['isController'] : null;
        $this->container['hasTopics'] = isset($data['hasTopics']) ? $data['hasTopics'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
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
    * Gets brokerId
    *  broker序号
    *
    * @return int|null
    */
    public function getBrokerId()
    {
        return $this->container['brokerId'];
    }

    /**
    * Sets brokerId
    *
    * @param int|null $brokerId broker序号
    *
    * @return $this
    */
    public function setBrokerId($brokerId)
    {
        $this->container['brokerId'] = $brokerId;
        return $this;
    }

    /**
    * Gets canDelete
    *  节点是否可删除。
    *
    * @return bool|null
    */
    public function getCanDelete()
    {
        return $this->container['canDelete'];
    }

    /**
    * Sets canDelete
    *
    * @param bool|null $canDelete 节点是否可删除。
    *
    * @return $this
    */
    public function setCanDelete($canDelete)
    {
        $this->container['canDelete'] = $canDelete;
        return $this;
    }

    /**
    * Gets isZkNode
    *  节点是否为zk部署节点。
    *
    * @return bool|null
    */
    public function getIsZkNode()
    {
        return $this->container['isZkNode'];
    }

    /**
    * Sets isZkNode
    *
    * @param bool|null $isZkNode 节点是否为zk部署节点。
    *
    * @return $this
    */
    public function setIsZkNode($isZkNode)
    {
        $this->container['isZkNode'] = $isZkNode;
        return $this;
    }

    /**
    * Gets isController
    *  broker是否为controller。
    *
    * @return bool|null
    */
    public function getIsController()
    {
        return $this->container['isController'];
    }

    /**
    * Sets isController
    *
    * @param bool|null $isController broker是否为controller。
    *
    * @return $this
    */
    public function setIsController($isController)
    {
        $this->container['isController'] = $isController;
        return $this;
    }

    /**
    * Gets hasTopics
    *  broker上是否存在topic数据。
    *
    * @return bool|null
    */
    public function getHasTopics()
    {
        return $this->container['hasTopics'];
    }

    /**
    * Sets hasTopics
    *
    * @param bool|null $hasTopics broker上是否存在topic数据。
    *
    * @return $this
    */
    public function setHasTopics($hasTopics)
    {
        $this->container['hasTopics'] = $hasTopics;
        return $this;
    }

    /**
    * Gets topics
    *  broker上存在的topic列表。
    *
    * @return string[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param string[]|null $topics broker上存在的topic列表。
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
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

