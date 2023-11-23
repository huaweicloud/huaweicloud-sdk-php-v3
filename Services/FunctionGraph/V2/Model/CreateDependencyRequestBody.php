<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDependencyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDependencyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dependFile  depend_type为zip类型时必填，为文件流格式,需要base64编码zip文件。上传的文件大小限制为40M，如超过40M，请通过OBS上传。
    * dependLink  depend_type为obs类型时，依赖包在obs的存储地址。
    * dependType  导入类型，目前支持obs和zip。
    * runtime  运行时语言，Java11、Nodejs14:、Python3:在type为v2时支持。
    * name  依赖包名称。必须以大、小写字母开头，以字母或数字结尾，只能由字母、数字、下划线、点和中划线组成，长度不超过96个字符。
    * description  依赖包描述，不超过512个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dependFile' => 'string',
            'dependLink' => 'string',
            'dependType' => 'string',
            'runtime' => 'string',
            'name' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dependFile  depend_type为zip类型时必填，为文件流格式,需要base64编码zip文件。上传的文件大小限制为40M，如超过40M，请通过OBS上传。
    * dependLink  depend_type为obs类型时，依赖包在obs的存储地址。
    * dependType  导入类型，目前支持obs和zip。
    * runtime  运行时语言，Java11、Nodejs14:、Python3:在type为v2时支持。
    * name  依赖包名称。必须以大、小写字母开头，以字母或数字结尾，只能由字母、数字、下划线、点和中划线组成，长度不超过96个字符。
    * description  依赖包描述，不超过512个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dependFile' => null,
        'dependLink' => null,
        'dependType' => null,
        'runtime' => null,
        'name' => null,
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
    * dependFile  depend_type为zip类型时必填，为文件流格式,需要base64编码zip文件。上传的文件大小限制为40M，如超过40M，请通过OBS上传。
    * dependLink  depend_type为obs类型时，依赖包在obs的存储地址。
    * dependType  导入类型，目前支持obs和zip。
    * runtime  运行时语言，Java11、Nodejs14:、Python3:在type为v2时支持。
    * name  依赖包名称。必须以大、小写字母开头，以字母或数字结尾，只能由字母、数字、下划线、点和中划线组成，长度不超过96个字符。
    * description  依赖包描述，不超过512个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dependFile' => 'depend_file',
            'dependLink' => 'depend_link',
            'dependType' => 'depend_type',
            'runtime' => 'runtime',
            'name' => 'name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dependFile  depend_type为zip类型时必填，为文件流格式,需要base64编码zip文件。上传的文件大小限制为40M，如超过40M，请通过OBS上传。
    * dependLink  depend_type为obs类型时，依赖包在obs的存储地址。
    * dependType  导入类型，目前支持obs和zip。
    * runtime  运行时语言，Java11、Nodejs14:、Python3:在type为v2时支持。
    * name  依赖包名称。必须以大、小写字母开头，以字母或数字结尾，只能由字母、数字、下划线、点和中划线组成，长度不超过96个字符。
    * description  依赖包描述，不超过512个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'dependFile' => 'setDependFile',
            'dependLink' => 'setDependLink',
            'dependType' => 'setDependType',
            'runtime' => 'setRuntime',
            'name' => 'setName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dependFile  depend_type为zip类型时必填，为文件流格式,需要base64编码zip文件。上传的文件大小限制为40M，如超过40M，请通过OBS上传。
    * dependLink  depend_type为obs类型时，依赖包在obs的存储地址。
    * dependType  导入类型，目前支持obs和zip。
    * runtime  运行时语言，Java11、Nodejs14:、Python3:在type为v2时支持。
    * name  依赖包名称。必须以大、小写字母开头，以字母或数字结尾，只能由字母、数字、下划线、点和中划线组成，长度不超过96个字符。
    * description  依赖包描述，不超过512个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'dependFile' => 'getDependFile',
            'dependLink' => 'getDependLink',
            'dependType' => 'getDependType',
            'runtime' => 'getRuntime',
            'name' => 'getName',
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
    const RUNTIME_JAVA8 = 'Java8';
    const RUNTIME_JAVA11 = 'Java11';
    const RUNTIME_NODE_JS6_10 = 'Node.js6.10';
    const RUNTIME_NODE_JS8_10 = 'Node.js8.10';
    const RUNTIME_NODE_JS10_16 = 'Node.js10.16';
    const RUNTIME_NODE_JS12_13 = 'Node.js12.13';
    const RUNTIME_NODE_JS14_18 = 'Node.js14.18';
    const RUNTIME_PYTHON2_7 = 'Python2.7';
    const RUNTIME_PYTHON3_6 = 'Python3.6';
    const RUNTIME_GO1_8 = 'Go1.8';
    const RUNTIME_GO1_X = 'Go1.x';
    const RUNTIME_C__NET_CORE_2_0 = 'C#(.NET Core 2.0)';
    const RUNTIME_C__NET_CORE_2_1 = 'C#(.NET Core 2.1)';
    const RUNTIME_C__NET_CORE_3_1 = 'C#(.NET Core 3.1)';
    const RUNTIME_PHP7_3 = 'PHP7.3';
    const RUNTIME_PYTHON3_9 = 'Python3.9';
    const RUNTIME_CUSTOM = 'Custom';
    const RUNTIME_HTTP = 'http';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuntimeAllowableValues()
    {
        return [
            self::RUNTIME_JAVA8,
            self::RUNTIME_JAVA11,
            self::RUNTIME_NODE_JS6_10,
            self::RUNTIME_NODE_JS8_10,
            self::RUNTIME_NODE_JS10_16,
            self::RUNTIME_NODE_JS12_13,
            self::RUNTIME_NODE_JS14_18,
            self::RUNTIME_PYTHON2_7,
            self::RUNTIME_PYTHON3_6,
            self::RUNTIME_GO1_8,
            self::RUNTIME_GO1_X,
            self::RUNTIME_C__NET_CORE_2_0,
            self::RUNTIME_C__NET_CORE_2_1,
            self::RUNTIME_C__NET_CORE_3_1,
            self::RUNTIME_PHP7_3,
            self::RUNTIME_PYTHON3_9,
            self::RUNTIME_CUSTOM,
            self::RUNTIME_HTTP,
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
        $this->container['dependFile'] = isset($data['dependFile']) ? $data['dependFile'] : null;
        $this->container['dependLink'] = isset($data['dependLink']) ? $data['dependLink'] : null;
        $this->container['dependType'] = isset($data['dependType']) ? $data['dependType'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
        if ($this->container['dependType'] === null) {
            $invalidProperties[] = "'dependType' can't be null";
        }
        if ($this->container['runtime'] === null) {
            $invalidProperties[] = "'runtime' can't be null";
        }
            $allowedValues = $this->getRuntimeAllowableValues();
                if (!is_null($this->container['runtime']) && !in_array($this->container['runtime'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runtime', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets dependFile
    *  depend_type为zip类型时必填，为文件流格式,需要base64编码zip文件。上传的文件大小限制为40M，如超过40M，请通过OBS上传。
    *
    * @return string|null
    */
    public function getDependFile()
    {
        return $this->container['dependFile'];
    }

    /**
    * Sets dependFile
    *
    * @param string|null $dependFile depend_type为zip类型时必填，为文件流格式,需要base64编码zip文件。上传的文件大小限制为40M，如超过40M，请通过OBS上传。
    *
    * @return $this
    */
    public function setDependFile($dependFile)
    {
        $this->container['dependFile'] = $dependFile;
        return $this;
    }

    /**
    * Gets dependLink
    *  depend_type为obs类型时，依赖包在obs的存储地址。
    *
    * @return string|null
    */
    public function getDependLink()
    {
        return $this->container['dependLink'];
    }

    /**
    * Sets dependLink
    *
    * @param string|null $dependLink depend_type为obs类型时，依赖包在obs的存储地址。
    *
    * @return $this
    */
    public function setDependLink($dependLink)
    {
        $this->container['dependLink'] = $dependLink;
        return $this;
    }

    /**
    * Gets dependType
    *  导入类型，目前支持obs和zip。
    *
    * @return string
    */
    public function getDependType()
    {
        return $this->container['dependType'];
    }

    /**
    * Sets dependType
    *
    * @param string $dependType 导入类型，目前支持obs和zip。
    *
    * @return $this
    */
    public function setDependType($dependType)
    {
        $this->container['dependType'] = $dependType;
        return $this;
    }

    /**
    * Gets runtime
    *  运行时语言，Java11、Nodejs14:、Python3:在type为v2时支持。
    *
    * @return string
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string $runtime 运行时语言，Java11、Nodejs14:、Python3:在type为v2时支持。
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets name
    *  依赖包名称。必须以大、小写字母开头，以字母或数字结尾，只能由字母、数字、下划线、点和中划线组成，长度不超过96个字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 依赖包名称。必须以大、小写字母开头，以字母或数字结尾，只能由字母、数字、下划线、点和中划线组成，长度不超过96个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  依赖包描述，不超过512个字符。
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
    * @param string|null $description 依赖包描述，不超过512个字符。
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

