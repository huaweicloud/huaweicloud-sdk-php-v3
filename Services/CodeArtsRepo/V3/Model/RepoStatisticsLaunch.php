<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoStatisticsLaunch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoStatisticsLaunch';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canStatistics  仓库是否可以统计
    * joinId  sidekiq任务的 id
    * message  启动仓库统计返回的信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canStatistics' => 'bool',
            'joinId' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canStatistics  仓库是否可以统计
    * joinId  sidekiq任务的 id
    * message  启动仓库统计返回的信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canStatistics' => null,
        'joinId' => null,
        'message' => null
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
    * canStatistics  仓库是否可以统计
    * joinId  sidekiq任务的 id
    * message  启动仓库统计返回的信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canStatistics' => 'can_statistics',
            'joinId' => 'join_id',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canStatistics  仓库是否可以统计
    * joinId  sidekiq任务的 id
    * message  启动仓库统计返回的信息
    *
    * @var string[]
    */
    protected static $setters = [
            'canStatistics' => 'setCanStatistics',
            'joinId' => 'setJoinId',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canStatistics  仓库是否可以统计
    * joinId  sidekiq任务的 id
    * message  启动仓库统计返回的信息
    *
    * @var string[]
    */
    protected static $getters = [
            'canStatistics' => 'getCanStatistics',
            'joinId' => 'getJoinId',
            'message' => 'getMessage'
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
        $this->container['canStatistics'] = isset($data['canStatistics']) ? $data['canStatistics'] : null;
        $this->container['joinId'] = isset($data['joinId']) ? $data['joinId'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
    * Gets canStatistics
    *  仓库是否可以统计
    *
    * @return bool|null
    */
    public function getCanStatistics()
    {
        return $this->container['canStatistics'];
    }

    /**
    * Sets canStatistics
    *
    * @param bool|null $canStatistics 仓库是否可以统计
    *
    * @return $this
    */
    public function setCanStatistics($canStatistics)
    {
        $this->container['canStatistics'] = $canStatistics;
        return $this;
    }

    /**
    * Gets joinId
    *  sidekiq任务的 id
    *
    * @return string|null
    */
    public function getJoinId()
    {
        return $this->container['joinId'];
    }

    /**
    * Sets joinId
    *
    * @param string|null $joinId sidekiq任务的 id
    *
    * @return $this
    */
    public function setJoinId($joinId)
    {
        $this->container['joinId'] = $joinId;
        return $this;
    }

    /**
    * Gets message
    *  启动仓库统计返回的信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 启动仓库统计返回的信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

