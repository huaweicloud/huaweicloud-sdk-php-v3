<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteDocumentRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteDocumentRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  作业版本号，若不传则默认为最新版本
    * parameters  全局参数
    * sysTags  系统标签列表
    * targetParameterName  速率控制模式下，批量执行对象的参数名
    * targets  与target_parameter_name搭配使用。选择实例化target_parameter_name参数的方式。
    * documentType  执行的作业类型
    * description  执行描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'parameters' => '\HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequestBodyParameters[]',
            'sysTags' => '\HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequestBodySysTags[]',
            'targetParameterName' => 'string',
            'targets' => '\HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequestBodyTargets[]',
            'documentType' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  作业版本号，若不传则默认为最新版本
    * parameters  全局参数
    * sysTags  系统标签列表
    * targetParameterName  速率控制模式下，批量执行对象的参数名
    * targets  与target_parameter_name搭配使用。选择实例化target_parameter_name参数的方式。
    * documentType  执行的作业类型
    * description  执行描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'parameters' => null,
        'sysTags' => null,
        'targetParameterName' => null,
        'targets' => null,
        'documentType' => null,
        'description' => null
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
    * version  作业版本号，若不传则默认为最新版本
    * parameters  全局参数
    * sysTags  系统标签列表
    * targetParameterName  速率控制模式下，批量执行对象的参数名
    * targets  与target_parameter_name搭配使用。选择实例化target_parameter_name参数的方式。
    * documentType  执行的作业类型
    * description  执行描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'parameters' => 'parameters',
            'sysTags' => 'sys_tags',
            'targetParameterName' => 'target_parameter_name',
            'targets' => 'targets',
            'documentType' => 'document_type',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  作业版本号，若不传则默认为最新版本
    * parameters  全局参数
    * sysTags  系统标签列表
    * targetParameterName  速率控制模式下，批量执行对象的参数名
    * targets  与target_parameter_name搭配使用。选择实例化target_parameter_name参数的方式。
    * documentType  执行的作业类型
    * description  执行描述
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'parameters' => 'setParameters',
            'sysTags' => 'setSysTags',
            'targetParameterName' => 'setTargetParameterName',
            'targets' => 'setTargets',
            'documentType' => 'setDocumentType',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  作业版本号，若不传则默认为最新版本
    * parameters  全局参数
    * sysTags  系统标签列表
    * targetParameterName  速率控制模式下，批量执行对象的参数名
    * targets  与target_parameter_name搭配使用。选择实例化target_parameter_name参数的方式。
    * documentType  执行的作业类型
    * description  执行描述
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'parameters' => 'getParameters',
            'sysTags' => 'getSysTags',
            'targetParameterName' => 'getTargetParameterName',
            'targets' => 'getTargets',
            'documentType' => 'getDocumentType',
            'description' => 'getDescription'
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
    const DOCUMENT_TYPE__PRIVATE = 'PRIVATE';
    const DOCUMENT_TYPE__PUBLIC = 'PUBLIC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE__PRIVATE,
            self::DOCUMENT_TYPE__PUBLIC,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['targetParameterName'] = isset($data['targetParameterName']) ? $data['targetParameterName'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
        $this->container['documentType'] = isset($data['documentType']) ? $data['documentType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getDocumentTypeAllowableValues();
                if (!is_null($this->container['documentType']) && !in_array($this->container['documentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'documentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets version
    *  作业版本号，若不传则默认为最新版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 作业版本号，若不传则默认为最新版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets parameters
    *  全局参数
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequestBodyParameters[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequestBodyParameters[]|null $parameters 全局参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets sysTags
    *  系统标签列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequestBodySysTags[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequestBodySysTags[]|null $sysTags 系统标签列表
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets targetParameterName
    *  速率控制模式下，批量执行对象的参数名
    *
    * @return string|null
    */
    public function getTargetParameterName()
    {
        return $this->container['targetParameterName'];
    }

    /**
    * Sets targetParameterName
    *
    * @param string|null $targetParameterName 速率控制模式下，批量执行对象的参数名
    *
    * @return $this
    */
    public function setTargetParameterName($targetParameterName)
    {
        $this->container['targetParameterName'] = $targetParameterName;
        return $this;
    }

    /**
    * Gets targets
    *  与target_parameter_name搭配使用。选择实例化target_parameter_name参数的方式。
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequestBodyTargets[]|null
    */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
    * Sets targets
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExecuteDocumentRequestBodyTargets[]|null $targets 与target_parameter_name搭配使用。选择实例化target_parameter_name参数的方式。
    *
    * @return $this
    */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;
        return $this;
    }

    /**
    * Gets documentType
    *  执行的作业类型
    *
    * @return string|null
    */
    public function getDocumentType()
    {
        return $this->container['documentType'];
    }

    /**
    * Sets documentType
    *
    * @param string|null $documentType 执行的作业类型
    *
    * @return $this
    */
    public function setDocumentType($documentType)
    {
        $this->container['documentType'] = $documentType;
        return $this;
    }

    /**
    * Gets description
    *  执行描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 执行描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

