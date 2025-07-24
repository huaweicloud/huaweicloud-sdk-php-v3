<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParamInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  仓库地址
    * branch  仓库分支
    * language  仓库语言
    * excludeDir  排除的目录
    * encode  编码格式
    * compileConfig  编译配置信息
    * ruleTemplate  g规则集名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'branch' => 'string',
            'language' => 'string',
            'excludeDir' => 'string',
            'encode' => 'string',
            'compileConfig' => 'string',
            'ruleTemplate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  仓库地址
    * branch  仓库分支
    * language  仓库语言
    * excludeDir  排除的目录
    * encode  编码格式
    * compileConfig  编译配置信息
    * ruleTemplate  g规则集名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'branch' => null,
        'language' => null,
        'excludeDir' => null,
        'encode' => null,
        'compileConfig' => null,
        'ruleTemplate' => null
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
    * url  仓库地址
    * branch  仓库分支
    * language  仓库语言
    * excludeDir  排除的目录
    * encode  编码格式
    * compileConfig  编译配置信息
    * ruleTemplate  g规则集名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'branch' => 'branch',
            'language' => 'language',
            'excludeDir' => 'exclude_dir',
            'encode' => 'encode',
            'compileConfig' => 'compile_config',
            'ruleTemplate' => 'rule_template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  仓库地址
    * branch  仓库分支
    * language  仓库语言
    * excludeDir  排除的目录
    * encode  编码格式
    * compileConfig  编译配置信息
    * ruleTemplate  g规则集名称
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'branch' => 'setBranch',
            'language' => 'setLanguage',
            'excludeDir' => 'setExcludeDir',
            'encode' => 'setEncode',
            'compileConfig' => 'setCompileConfig',
            'ruleTemplate' => 'setRuleTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  仓库地址
    * branch  仓库分支
    * language  仓库语言
    * excludeDir  排除的目录
    * encode  编码格式
    * compileConfig  编译配置信息
    * ruleTemplate  g规则集名称
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'branch' => 'getBranch',
            'language' => 'getLanguage',
            'excludeDir' => 'getExcludeDir',
            'encode' => 'getEncode',
            'compileConfig' => 'getCompileConfig',
            'ruleTemplate' => 'getRuleTemplate'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['excludeDir'] = isset($data['excludeDir']) ? $data['excludeDir'] : null;
        $this->container['encode'] = isset($data['encode']) ? $data['encode'] : null;
        $this->container['compileConfig'] = isset($data['compileConfig']) ? $data['compileConfig'] : null;
        $this->container['ruleTemplate'] = isset($data['ruleTemplate']) ? $data['ruleTemplate'] : null;
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
    * Gets url
    *  仓库地址
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 仓库地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets branch
    *  仓库分支
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch 仓库分支
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets language
    *  仓库语言
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 仓库语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets excludeDir
    *  排除的目录
    *
    * @return string|null
    */
    public function getExcludeDir()
    {
        return $this->container['excludeDir'];
    }

    /**
    * Sets excludeDir
    *
    * @param string|null $excludeDir 排除的目录
    *
    * @return $this
    */
    public function setExcludeDir($excludeDir)
    {
        $this->container['excludeDir'] = $excludeDir;
        return $this;
    }

    /**
    * Gets encode
    *  编码格式
    *
    * @return string|null
    */
    public function getEncode()
    {
        return $this->container['encode'];
    }

    /**
    * Sets encode
    *
    * @param string|null $encode 编码格式
    *
    * @return $this
    */
    public function setEncode($encode)
    {
        $this->container['encode'] = $encode;
        return $this;
    }

    /**
    * Gets compileConfig
    *  编译配置信息
    *
    * @return string|null
    */
    public function getCompileConfig()
    {
        return $this->container['compileConfig'];
    }

    /**
    * Sets compileConfig
    *
    * @param string|null $compileConfig 编译配置信息
    *
    * @return $this
    */
    public function setCompileConfig($compileConfig)
    {
        $this->container['compileConfig'] = $compileConfig;
        return $this;
    }

    /**
    * Gets ruleTemplate
    *  g规则集名称
    *
    * @return string|null
    */
    public function getRuleTemplate()
    {
        return $this->container['ruleTemplate'];
    }

    /**
    * Sets ruleTemplate
    *
    * @param string|null $ruleTemplate g规则集名称
    *
    * @return $this
    */
    public function setRuleTemplate($ruleTemplate)
    {
        $this->container['ruleTemplate'] = $ruleTemplate;
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

