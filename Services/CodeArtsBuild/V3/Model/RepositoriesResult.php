<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepositoriesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Repositories_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * latest  最后一次仓库名称
    * repositories  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'latest' => 'string',
            'repositories' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * latest  最后一次仓库名称
    * repositories  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'latest' => null,
        'repositories' => null
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
    * latest  最后一次仓库名称
    * repositories  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'latest' => 'latest',
            'repositories' => 'repositories'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * latest  最后一次仓库名称
    * repositories  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $setters = [
            'latest' => 'setLatest',
            'repositories' => 'setRepositories'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * latest  最后一次仓库名称
    * repositories  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @var string[]
    */
    protected static $getters = [
            'latest' => 'getLatest',
            'repositories' => 'getRepositories'
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
        $this->container['latest'] = isset($data['latest']) ? $data['latest'] : null;
        $this->container['repositories'] = isset($data['repositories']) ? $data['repositories'] : null;
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
    * Gets latest
    *  最后一次仓库名称
    *
    * @return string|null
    */
    public function getLatest()
    {
        return $this->container['latest'];
    }

    /**
    * Sets latest
    *
    * @param string|null $latest 最后一次仓库名称
    *
    * @return $this
    */
    public function setLatest($latest)
    {
        $this->container['latest'] = $latest;
        return $this;
    }

    /**
    * Gets repositories
    *  本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @return string[]|null
    */
    public function getRepositories()
    {
        return $this->container['repositories'];
    }

    /**
    * Sets repositories
    *
    * @param string[]|null $repositories 本次任务的构建步骤详情，返回的步骤为页面可见步骤
    *
    * @return $this
    */
    public function setRepositories($repositories)
    {
        $this->container['repositories'] = $repositories;
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

