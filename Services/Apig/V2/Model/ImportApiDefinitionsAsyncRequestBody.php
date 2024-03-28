<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportApiDefinitionsAsyncRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportApiDefinitionsAsyncRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isCreateGroup  是否创建新分组
    * groupId  API分组编号，当is_create_group=false时为必填
    * extendMode  扩展信息导入模式 - merge：当扩展信息定义冲突时，merge保留原有扩展信息 - override：当扩展信息定义冲突时，override会覆盖原有扩展信息
    * simpleMode  是否开启简易导入模式
    * mockMode  是否开启Mock后端
    * apiMode  导入模式 - merge：当API信息定义冲突时，merge保留原有API信息 - override：当API信息定义冲突时，override会覆盖原有API信息
    * fileName  导入Api的请求体，json或yaml格式的文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isCreateGroup' => 'bool',
            'groupId' => 'string',
            'extendMode' => 'string',
            'simpleMode' => 'bool',
            'mockMode' => 'bool',
            'apiMode' => 'string',
            'fileName' => '\SplFileObject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isCreateGroup  是否创建新分组
    * groupId  API分组编号，当is_create_group=false时为必填
    * extendMode  扩展信息导入模式 - merge：当扩展信息定义冲突时，merge保留原有扩展信息 - override：当扩展信息定义冲突时，override会覆盖原有扩展信息
    * simpleMode  是否开启简易导入模式
    * mockMode  是否开启Mock后端
    * apiMode  导入模式 - merge：当API信息定义冲突时，merge保留原有API信息 - override：当API信息定义冲突时，override会覆盖原有API信息
    * fileName  导入Api的请求体，json或yaml格式的文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isCreateGroup' => null,
        'groupId' => null,
        'extendMode' => null,
        'simpleMode' => null,
        'mockMode' => null,
        'apiMode' => null,
        'fileName' => 'binary'
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
    * isCreateGroup  是否创建新分组
    * groupId  API分组编号，当is_create_group=false时为必填
    * extendMode  扩展信息导入模式 - merge：当扩展信息定义冲突时，merge保留原有扩展信息 - override：当扩展信息定义冲突时，override会覆盖原有扩展信息
    * simpleMode  是否开启简易导入模式
    * mockMode  是否开启Mock后端
    * apiMode  导入模式 - merge：当API信息定义冲突时，merge保留原有API信息 - override：当API信息定义冲突时，override会覆盖原有API信息
    * fileName  导入Api的请求体，json或yaml格式的文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isCreateGroup' => 'is_create_group',
            'groupId' => 'group_id',
            'extendMode' => 'extend_mode',
            'simpleMode' => 'simple_mode',
            'mockMode' => 'mock_mode',
            'apiMode' => 'api_mode',
            'fileName' => 'file_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isCreateGroup  是否创建新分组
    * groupId  API分组编号，当is_create_group=false时为必填
    * extendMode  扩展信息导入模式 - merge：当扩展信息定义冲突时，merge保留原有扩展信息 - override：当扩展信息定义冲突时，override会覆盖原有扩展信息
    * simpleMode  是否开启简易导入模式
    * mockMode  是否开启Mock后端
    * apiMode  导入模式 - merge：当API信息定义冲突时，merge保留原有API信息 - override：当API信息定义冲突时，override会覆盖原有API信息
    * fileName  导入Api的请求体，json或yaml格式的文件
    *
    * @var string[]
    */
    protected static $setters = [
            'isCreateGroup' => 'setIsCreateGroup',
            'groupId' => 'setGroupId',
            'extendMode' => 'setExtendMode',
            'simpleMode' => 'setSimpleMode',
            'mockMode' => 'setMockMode',
            'apiMode' => 'setApiMode',
            'fileName' => 'setFileName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isCreateGroup  是否创建新分组
    * groupId  API分组编号，当is_create_group=false时为必填
    * extendMode  扩展信息导入模式 - merge：当扩展信息定义冲突时，merge保留原有扩展信息 - override：当扩展信息定义冲突时，override会覆盖原有扩展信息
    * simpleMode  是否开启简易导入模式
    * mockMode  是否开启Mock后端
    * apiMode  导入模式 - merge：当API信息定义冲突时，merge保留原有API信息 - override：当API信息定义冲突时，override会覆盖原有API信息
    * fileName  导入Api的请求体，json或yaml格式的文件
    *
    * @var string[]
    */
    protected static $getters = [
            'isCreateGroup' => 'getIsCreateGroup',
            'groupId' => 'getGroupId',
            'extendMode' => 'getExtendMode',
            'simpleMode' => 'getSimpleMode',
            'mockMode' => 'getMockMode',
            'apiMode' => 'getApiMode',
            'fileName' => 'getFileName'
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
    const EXTEND_MODE_MERGE = 'merge';
    const EXTEND_MODE_OVERRIDE = 'override';
    const API_MODE_MERGE = 'merge';
    const API_MODE_OVERRIDE = 'override';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExtendModeAllowableValues()
    {
        return [
            self::EXTEND_MODE_MERGE,
            self::EXTEND_MODE_OVERRIDE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApiModeAllowableValues()
    {
        return [
            self::API_MODE_MERGE,
            self::API_MODE_OVERRIDE,
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
        $this->container['isCreateGroup'] = isset($data['isCreateGroup']) ? $data['isCreateGroup'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['extendMode'] = isset($data['extendMode']) ? $data['extendMode'] : null;
        $this->container['simpleMode'] = isset($data['simpleMode']) ? $data['simpleMode'] : null;
        $this->container['mockMode'] = isset($data['mockMode']) ? $data['mockMode'] : null;
        $this->container['apiMode'] = isset($data['apiMode']) ? $data['apiMode'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getExtendModeAllowableValues();
                if (!is_null($this->container['extendMode']) && !in_array($this->container['extendMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'extendMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApiModeAllowableValues();
                if (!is_null($this->container['apiMode']) && !in_array($this->container['apiMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'apiMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
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
    * Gets isCreateGroup
    *  是否创建新分组
    *
    * @return bool|null
    */
    public function getIsCreateGroup()
    {
        return $this->container['isCreateGroup'];
    }

    /**
    * Sets isCreateGroup
    *
    * @param bool|null $isCreateGroup 是否创建新分组
    *
    * @return $this
    */
    public function setIsCreateGroup($isCreateGroup)
    {
        $this->container['isCreateGroup'] = $isCreateGroup;
        return $this;
    }

    /**
    * Gets groupId
    *  API分组编号，当is_create_group=false时为必填
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId API分组编号，当is_create_group=false时为必填
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets extendMode
    *  扩展信息导入模式 - merge：当扩展信息定义冲突时，merge保留原有扩展信息 - override：当扩展信息定义冲突时，override会覆盖原有扩展信息
    *
    * @return string|null
    */
    public function getExtendMode()
    {
        return $this->container['extendMode'];
    }

    /**
    * Sets extendMode
    *
    * @param string|null $extendMode 扩展信息导入模式 - merge：当扩展信息定义冲突时，merge保留原有扩展信息 - override：当扩展信息定义冲突时，override会覆盖原有扩展信息
    *
    * @return $this
    */
    public function setExtendMode($extendMode)
    {
        $this->container['extendMode'] = $extendMode;
        return $this;
    }

    /**
    * Gets simpleMode
    *  是否开启简易导入模式
    *
    * @return bool|null
    */
    public function getSimpleMode()
    {
        return $this->container['simpleMode'];
    }

    /**
    * Sets simpleMode
    *
    * @param bool|null $simpleMode 是否开启简易导入模式
    *
    * @return $this
    */
    public function setSimpleMode($simpleMode)
    {
        $this->container['simpleMode'] = $simpleMode;
        return $this;
    }

    /**
    * Gets mockMode
    *  是否开启Mock后端
    *
    * @return bool|null
    */
    public function getMockMode()
    {
        return $this->container['mockMode'];
    }

    /**
    * Sets mockMode
    *
    * @param bool|null $mockMode 是否开启Mock后端
    *
    * @return $this
    */
    public function setMockMode($mockMode)
    {
        $this->container['mockMode'] = $mockMode;
        return $this;
    }

    /**
    * Gets apiMode
    *  导入模式 - merge：当API信息定义冲突时，merge保留原有API信息 - override：当API信息定义冲突时，override会覆盖原有API信息
    *
    * @return string|null
    */
    public function getApiMode()
    {
        return $this->container['apiMode'];
    }

    /**
    * Sets apiMode
    *
    * @param string|null $apiMode 导入模式 - merge：当API信息定义冲突时，merge保留原有API信息 - override：当API信息定义冲突时，override会覆盖原有API信息
    *
    * @return $this
    */
    public function setApiMode($apiMode)
    {
        $this->container['apiMode'] = $apiMode;
        return $this;
    }

    /**
    * Gets fileName
    *  导入Api的请求体，json或yaml格式的文件
    *
    * @return \SplFileObject
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param \SplFileObject $fileName 导入Api的请求体，json或yaml格式的文件
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
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

