<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HumanModelMetaProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HumanModelMetaProperties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * wholeModelBaseFileId  当前模型中的WHOLE_MODEL是基于哪个file_id生成的，如果当前记录的信息与MAIN文件的file_id一致，那就认为已经生成过，无需再进行全模型导出
    * loadModelFileId  当前用于加载的file_id信息，若为空或未匹配到，则使用MAIN文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'wholeModelBaseFileId' => 'string',
            'loadModelFileId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * wholeModelBaseFileId  当前模型中的WHOLE_MODEL是基于哪个file_id生成的，如果当前记录的信息与MAIN文件的file_id一致，那就认为已经生成过，无需再进行全模型导出
    * loadModelFileId  当前用于加载的file_id信息，若为空或未匹配到，则使用MAIN文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'wholeModelBaseFileId' => null,
        'loadModelFileId' => null
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
    * wholeModelBaseFileId  当前模型中的WHOLE_MODEL是基于哪个file_id生成的，如果当前记录的信息与MAIN文件的file_id一致，那就认为已经生成过，无需再进行全模型导出
    * loadModelFileId  当前用于加载的file_id信息，若为空或未匹配到，则使用MAIN文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'wholeModelBaseFileId' => 'whole_model_base_file_id',
            'loadModelFileId' => 'load_model_file_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * wholeModelBaseFileId  当前模型中的WHOLE_MODEL是基于哪个file_id生成的，如果当前记录的信息与MAIN文件的file_id一致，那就认为已经生成过，无需再进行全模型导出
    * loadModelFileId  当前用于加载的file_id信息，若为空或未匹配到，则使用MAIN文件
    *
    * @var string[]
    */
    protected static $setters = [
            'wholeModelBaseFileId' => 'setWholeModelBaseFileId',
            'loadModelFileId' => 'setLoadModelFileId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * wholeModelBaseFileId  当前模型中的WHOLE_MODEL是基于哪个file_id生成的，如果当前记录的信息与MAIN文件的file_id一致，那就认为已经生成过，无需再进行全模型导出
    * loadModelFileId  当前用于加载的file_id信息，若为空或未匹配到，则使用MAIN文件
    *
    * @var string[]
    */
    protected static $getters = [
            'wholeModelBaseFileId' => 'getWholeModelBaseFileId',
            'loadModelFileId' => 'getLoadModelFileId'
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
        $this->container['wholeModelBaseFileId'] = isset($data['wholeModelBaseFileId']) ? $data['wholeModelBaseFileId'] : null;
        $this->container['loadModelFileId'] = isset($data['loadModelFileId']) ? $data['loadModelFileId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['wholeModelBaseFileId']) && (mb_strlen($this->container['wholeModelBaseFileId']) > 64)) {
                $invalidProperties[] = "invalid value for 'wholeModelBaseFileId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['wholeModelBaseFileId']) && (mb_strlen($this->container['wholeModelBaseFileId']) < 0)) {
                $invalidProperties[] = "invalid value for 'wholeModelBaseFileId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loadModelFileId']) && (mb_strlen($this->container['loadModelFileId']) > 64)) {
                $invalidProperties[] = "invalid value for 'loadModelFileId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['loadModelFileId']) && (mb_strlen($this->container['loadModelFileId']) < 0)) {
                $invalidProperties[] = "invalid value for 'loadModelFileId', the character length must be bigger than or equal to 0.";
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
    * Gets wholeModelBaseFileId
    *  当前模型中的WHOLE_MODEL是基于哪个file_id生成的，如果当前记录的信息与MAIN文件的file_id一致，那就认为已经生成过，无需再进行全模型导出
    *
    * @return string|null
    */
    public function getWholeModelBaseFileId()
    {
        return $this->container['wholeModelBaseFileId'];
    }

    /**
    * Sets wholeModelBaseFileId
    *
    * @param string|null $wholeModelBaseFileId 当前模型中的WHOLE_MODEL是基于哪个file_id生成的，如果当前记录的信息与MAIN文件的file_id一致，那就认为已经生成过，无需再进行全模型导出
    *
    * @return $this
    */
    public function setWholeModelBaseFileId($wholeModelBaseFileId)
    {
        $this->container['wholeModelBaseFileId'] = $wholeModelBaseFileId;
        return $this;
    }

    /**
    * Gets loadModelFileId
    *  当前用于加载的file_id信息，若为空或未匹配到，则使用MAIN文件
    *
    * @return string|null
    */
    public function getLoadModelFileId()
    {
        return $this->container['loadModelFileId'];
    }

    /**
    * Sets loadModelFileId
    *
    * @param string|null $loadModelFileId 当前用于加载的file_id信息，若为空或未匹配到，则使用MAIN文件
    *
    * @return $this
    */
    public function setLoadModelFileId($loadModelFileId)
    {
        $this->container['loadModelFileId'] = $loadModelFileId;
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

