<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Detail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Detail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceKey  自定义时间key字段名称
    * regex  正则解析正则表达式 单行完全正则，多行完全正则需填此字段
    * keys  字段名称列表 与field_name字段保持一致
    * multiLineRegex  首行正则表达式
    * keepSource  是否上传原始日志
    * keepSourceIfParseError  是否上传解析失败日志
    * splitSep  分隔符 自定义字符最大长度10，自定义字符串最大长度30
    * splitType  分隔符类型：char-自定义字符；special_char-不可见字符；string-自定义字符串
    * fields  添加的字段列表：<字段名称 : 字段内容>
    * dropKeys  删除的字段列表
    * sourceKeys  字段重命名源字段名称列表
    * destKeys  字段重命名替换的字段名称列表
    * expandDepth  json解析深度，默认为1层最大4层
    * expandConnector  json解析字段名称连接符
    * sourceFormat  自定义时间时间格式
    * sourceValue  自定义时间字段value
    * setTime  是否开启自定义时间的开关
    * include  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    * exclude  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceKey' => 'string',
            'regex' => 'string',
            'keys' => 'string[]',
            'multiLineRegex' => 'string',
            'keepSource' => 'bool',
            'keepSourceIfParseError' => 'bool',
            'splitSep' => 'string',
            'splitType' => 'string',
            'fields' => 'map[string,string]',
            'dropKeys' => 'string[]',
            'sourceKeys' => 'string[]',
            'destKeys' => 'string[]',
            'expandDepth' => 'int',
            'expandConnector' => 'string',
            'sourceFormat' => 'string',
            'sourceValue' => 'string',
            'setTime' => 'bool',
            'include' => 'map[string,string]',
            'exclude' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceKey  自定义时间key字段名称
    * regex  正则解析正则表达式 单行完全正则，多行完全正则需填此字段
    * keys  字段名称列表 与field_name字段保持一致
    * multiLineRegex  首行正则表达式
    * keepSource  是否上传原始日志
    * keepSourceIfParseError  是否上传解析失败日志
    * splitSep  分隔符 自定义字符最大长度10，自定义字符串最大长度30
    * splitType  分隔符类型：char-自定义字符；special_char-不可见字符；string-自定义字符串
    * fields  添加的字段列表：<字段名称 : 字段内容>
    * dropKeys  删除的字段列表
    * sourceKeys  字段重命名源字段名称列表
    * destKeys  字段重命名替换的字段名称列表
    * expandDepth  json解析深度，默认为1层最大4层
    * expandConnector  json解析字段名称连接符
    * sourceFormat  自定义时间时间格式
    * sourceValue  自定义时间字段value
    * setTime  是否开启自定义时间的开关
    * include  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    * exclude  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceKey' => null,
        'regex' => null,
        'keys' => null,
        'multiLineRegex' => null,
        'keepSource' => null,
        'keepSourceIfParseError' => null,
        'splitSep' => null,
        'splitType' => null,
        'fields' => null,
        'dropKeys' => null,
        'sourceKeys' => null,
        'destKeys' => null,
        'expandDepth' => 'int32',
        'expandConnector' => null,
        'sourceFormat' => null,
        'sourceValue' => null,
        'setTime' => null,
        'include' => null,
        'exclude' => null
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
    * sourceKey  自定义时间key字段名称
    * regex  正则解析正则表达式 单行完全正则，多行完全正则需填此字段
    * keys  字段名称列表 与field_name字段保持一致
    * multiLineRegex  首行正则表达式
    * keepSource  是否上传原始日志
    * keepSourceIfParseError  是否上传解析失败日志
    * splitSep  分隔符 自定义字符最大长度10，自定义字符串最大长度30
    * splitType  分隔符类型：char-自定义字符；special_char-不可见字符；string-自定义字符串
    * fields  添加的字段列表：<字段名称 : 字段内容>
    * dropKeys  删除的字段列表
    * sourceKeys  字段重命名源字段名称列表
    * destKeys  字段重命名替换的字段名称列表
    * expandDepth  json解析深度，默认为1层最大4层
    * expandConnector  json解析字段名称连接符
    * sourceFormat  自定义时间时间格式
    * sourceValue  自定义时间字段value
    * setTime  是否开启自定义时间的开关
    * include  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    * exclude  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceKey' => 'source_key',
            'regex' => 'regex',
            'keys' => 'keys',
            'multiLineRegex' => 'multi_line_regex',
            'keepSource' => 'keep_source',
            'keepSourceIfParseError' => 'keep_source_if_parse_error',
            'splitSep' => 'split_sep',
            'splitType' => 'split_type',
            'fields' => 'fields',
            'dropKeys' => 'drop_keys',
            'sourceKeys' => 'source_keys',
            'destKeys' => 'dest_keys',
            'expandDepth' => 'expand_depth',
            'expandConnector' => 'expand_connector',
            'sourceFormat' => 'source_format',
            'sourceValue' => 'source_value',
            'setTime' => 'set_time',
            'include' => 'include',
            'exclude' => 'exclude'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceKey  自定义时间key字段名称
    * regex  正则解析正则表达式 单行完全正则，多行完全正则需填此字段
    * keys  字段名称列表 与field_name字段保持一致
    * multiLineRegex  首行正则表达式
    * keepSource  是否上传原始日志
    * keepSourceIfParseError  是否上传解析失败日志
    * splitSep  分隔符 自定义字符最大长度10，自定义字符串最大长度30
    * splitType  分隔符类型：char-自定义字符；special_char-不可见字符；string-自定义字符串
    * fields  添加的字段列表：<字段名称 : 字段内容>
    * dropKeys  删除的字段列表
    * sourceKeys  字段重命名源字段名称列表
    * destKeys  字段重命名替换的字段名称列表
    * expandDepth  json解析深度，默认为1层最大4层
    * expandConnector  json解析字段名称连接符
    * sourceFormat  自定义时间时间格式
    * sourceValue  自定义时间字段value
    * setTime  是否开启自定义时间的开关
    * include  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    * exclude  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceKey' => 'setSourceKey',
            'regex' => 'setRegex',
            'keys' => 'setKeys',
            'multiLineRegex' => 'setMultiLineRegex',
            'keepSource' => 'setKeepSource',
            'keepSourceIfParseError' => 'setKeepSourceIfParseError',
            'splitSep' => 'setSplitSep',
            'splitType' => 'setSplitType',
            'fields' => 'setFields',
            'dropKeys' => 'setDropKeys',
            'sourceKeys' => 'setSourceKeys',
            'destKeys' => 'setDestKeys',
            'expandDepth' => 'setExpandDepth',
            'expandConnector' => 'setExpandConnector',
            'sourceFormat' => 'setSourceFormat',
            'sourceValue' => 'setSourceValue',
            'setTime' => 'setSetTime',
            'include' => 'setInclude',
            'exclude' => 'setExclude'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceKey  自定义时间key字段名称
    * regex  正则解析正则表达式 单行完全正则，多行完全正则需填此字段
    * keys  字段名称列表 与field_name字段保持一致
    * multiLineRegex  首行正则表达式
    * keepSource  是否上传原始日志
    * keepSourceIfParseError  是否上传解析失败日志
    * splitSep  分隔符 自定义字符最大长度10，自定义字符串最大长度30
    * splitType  分隔符类型：char-自定义字符；special_char-不可见字符；string-自定义字符串
    * fields  添加的字段列表：<字段名称 : 字段内容>
    * dropKeys  删除的字段列表
    * sourceKeys  字段重命名源字段名称列表
    * destKeys  字段重命名替换的字段名称列表
    * expandDepth  json解析深度，默认为1层最大4层
    * expandConnector  json解析字段名称连接符
    * sourceFormat  自定义时间时间格式
    * sourceValue  自定义时间字段value
    * setTime  是否开启自定义时间的开关
    * include  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    * exclude  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceKey' => 'getSourceKey',
            'regex' => 'getRegex',
            'keys' => 'getKeys',
            'multiLineRegex' => 'getMultiLineRegex',
            'keepSource' => 'getKeepSource',
            'keepSourceIfParseError' => 'getKeepSourceIfParseError',
            'splitSep' => 'getSplitSep',
            'splitType' => 'getSplitType',
            'fields' => 'getFields',
            'dropKeys' => 'getDropKeys',
            'sourceKeys' => 'getSourceKeys',
            'destKeys' => 'getDestKeys',
            'expandDepth' => 'getExpandDepth',
            'expandConnector' => 'getExpandConnector',
            'sourceFormat' => 'getSourceFormat',
            'sourceValue' => 'getSourceValue',
            'setTime' => 'getSetTime',
            'include' => 'getInclude',
            'exclude' => 'getExclude'
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
        $this->container['sourceKey'] = isset($data['sourceKey']) ? $data['sourceKey'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
        $this->container['keys'] = isset($data['keys']) ? $data['keys'] : null;
        $this->container['multiLineRegex'] = isset($data['multiLineRegex']) ? $data['multiLineRegex'] : null;
        $this->container['keepSource'] = isset($data['keepSource']) ? $data['keepSource'] : null;
        $this->container['keepSourceIfParseError'] = isset($data['keepSourceIfParseError']) ? $data['keepSourceIfParseError'] : null;
        $this->container['splitSep'] = isset($data['splitSep']) ? $data['splitSep'] : null;
        $this->container['splitType'] = isset($data['splitType']) ? $data['splitType'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['dropKeys'] = isset($data['dropKeys']) ? $data['dropKeys'] : null;
        $this->container['sourceKeys'] = isset($data['sourceKeys']) ? $data['sourceKeys'] : null;
        $this->container['destKeys'] = isset($data['destKeys']) ? $data['destKeys'] : null;
        $this->container['expandDepth'] = isset($data['expandDepth']) ? $data['expandDepth'] : null;
        $this->container['expandConnector'] = isset($data['expandConnector']) ? $data['expandConnector'] : null;
        $this->container['sourceFormat'] = isset($data['sourceFormat']) ? $data['sourceFormat'] : null;
        $this->container['sourceValue'] = isset($data['sourceValue']) ? $data['sourceValue'] : null;
        $this->container['setTime'] = isset($data['setTime']) ? $data['setTime'] : null;
        $this->container['include'] = isset($data['include']) ? $data['include'] : null;
        $this->container['exclude'] = isset($data['exclude']) ? $data['exclude'] : null;
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
    * Gets sourceKey
    *  自定义时间key字段名称
    *
    * @return string|null
    */
    public function getSourceKey()
    {
        return $this->container['sourceKey'];
    }

    /**
    * Sets sourceKey
    *
    * @param string|null $sourceKey 自定义时间key字段名称
    *
    * @return $this
    */
    public function setSourceKey($sourceKey)
    {
        $this->container['sourceKey'] = $sourceKey;
        return $this;
    }

    /**
    * Gets regex
    *  正则解析正则表达式 单行完全正则，多行完全正则需填此字段
    *
    * @return string|null
    */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
    * Sets regex
    *
    * @param string|null $regex 正则解析正则表达式 单行完全正则，多行完全正则需填此字段
    *
    * @return $this
    */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;
        return $this;
    }

    /**
    * Gets keys
    *  字段名称列表 与field_name字段保持一致
    *
    * @return string[]|null
    */
    public function getKeys()
    {
        return $this->container['keys'];
    }

    /**
    * Sets keys
    *
    * @param string[]|null $keys 字段名称列表 与field_name字段保持一致
    *
    * @return $this
    */
    public function setKeys($keys)
    {
        $this->container['keys'] = $keys;
        return $this;
    }

    /**
    * Gets multiLineRegex
    *  首行正则表达式
    *
    * @return string|null
    */
    public function getMultiLineRegex()
    {
        return $this->container['multiLineRegex'];
    }

    /**
    * Sets multiLineRegex
    *
    * @param string|null $multiLineRegex 首行正则表达式
    *
    * @return $this
    */
    public function setMultiLineRegex($multiLineRegex)
    {
        $this->container['multiLineRegex'] = $multiLineRegex;
        return $this;
    }

    /**
    * Gets keepSource
    *  是否上传原始日志
    *
    * @return bool|null
    */
    public function getKeepSource()
    {
        return $this->container['keepSource'];
    }

    /**
    * Sets keepSource
    *
    * @param bool|null $keepSource 是否上传原始日志
    *
    * @return $this
    */
    public function setKeepSource($keepSource)
    {
        $this->container['keepSource'] = $keepSource;
        return $this;
    }

    /**
    * Gets keepSourceIfParseError
    *  是否上传解析失败日志
    *
    * @return bool|null
    */
    public function getKeepSourceIfParseError()
    {
        return $this->container['keepSourceIfParseError'];
    }

    /**
    * Sets keepSourceIfParseError
    *
    * @param bool|null $keepSourceIfParseError 是否上传解析失败日志
    *
    * @return $this
    */
    public function setKeepSourceIfParseError($keepSourceIfParseError)
    {
        $this->container['keepSourceIfParseError'] = $keepSourceIfParseError;
        return $this;
    }

    /**
    * Gets splitSep
    *  分隔符 自定义字符最大长度10，自定义字符串最大长度30
    *
    * @return string|null
    */
    public function getSplitSep()
    {
        return $this->container['splitSep'];
    }

    /**
    * Sets splitSep
    *
    * @param string|null $splitSep 分隔符 自定义字符最大长度10，自定义字符串最大长度30
    *
    * @return $this
    */
    public function setSplitSep($splitSep)
    {
        $this->container['splitSep'] = $splitSep;
        return $this;
    }

    /**
    * Gets splitType
    *  分隔符类型：char-自定义字符；special_char-不可见字符；string-自定义字符串
    *
    * @return string|null
    */
    public function getSplitType()
    {
        return $this->container['splitType'];
    }

    /**
    * Sets splitType
    *
    * @param string|null $splitType 分隔符类型：char-自定义字符；special_char-不可见字符；string-自定义字符串
    *
    * @return $this
    */
    public function setSplitType($splitType)
    {
        $this->container['splitType'] = $splitType;
        return $this;
    }

    /**
    * Gets fields
    *  添加的字段列表：<字段名称 : 字段内容>
    *
    * @return map[string,string]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param map[string,string]|null $fields 添加的字段列表：<字段名称 : 字段内容>
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets dropKeys
    *  删除的字段列表
    *
    * @return string[]|null
    */
    public function getDropKeys()
    {
        return $this->container['dropKeys'];
    }

    /**
    * Sets dropKeys
    *
    * @param string[]|null $dropKeys 删除的字段列表
    *
    * @return $this
    */
    public function setDropKeys($dropKeys)
    {
        $this->container['dropKeys'] = $dropKeys;
        return $this;
    }

    /**
    * Gets sourceKeys
    *  字段重命名源字段名称列表
    *
    * @return string[]|null
    */
    public function getSourceKeys()
    {
        return $this->container['sourceKeys'];
    }

    /**
    * Sets sourceKeys
    *
    * @param string[]|null $sourceKeys 字段重命名源字段名称列表
    *
    * @return $this
    */
    public function setSourceKeys($sourceKeys)
    {
        $this->container['sourceKeys'] = $sourceKeys;
        return $this;
    }

    /**
    * Gets destKeys
    *  字段重命名替换的字段名称列表
    *
    * @return string[]|null
    */
    public function getDestKeys()
    {
        return $this->container['destKeys'];
    }

    /**
    * Sets destKeys
    *
    * @param string[]|null $destKeys 字段重命名替换的字段名称列表
    *
    * @return $this
    */
    public function setDestKeys($destKeys)
    {
        $this->container['destKeys'] = $destKeys;
        return $this;
    }

    /**
    * Gets expandDepth
    *  json解析深度，默认为1层最大4层
    *
    * @return int|null
    */
    public function getExpandDepth()
    {
        return $this->container['expandDepth'];
    }

    /**
    * Sets expandDepth
    *
    * @param int|null $expandDepth json解析深度，默认为1层最大4层
    *
    * @return $this
    */
    public function setExpandDepth($expandDepth)
    {
        $this->container['expandDepth'] = $expandDepth;
        return $this;
    }

    /**
    * Gets expandConnector
    *  json解析字段名称连接符
    *
    * @return string|null
    */
    public function getExpandConnector()
    {
        return $this->container['expandConnector'];
    }

    /**
    * Sets expandConnector
    *
    * @param string|null $expandConnector json解析字段名称连接符
    *
    * @return $this
    */
    public function setExpandConnector($expandConnector)
    {
        $this->container['expandConnector'] = $expandConnector;
        return $this;
    }

    /**
    * Gets sourceFormat
    *  自定义时间时间格式
    *
    * @return string|null
    */
    public function getSourceFormat()
    {
        return $this->container['sourceFormat'];
    }

    /**
    * Sets sourceFormat
    *
    * @param string|null $sourceFormat 自定义时间时间格式
    *
    * @return $this
    */
    public function setSourceFormat($sourceFormat)
    {
        $this->container['sourceFormat'] = $sourceFormat;
        return $this;
    }

    /**
    * Gets sourceValue
    *  自定义时间字段value
    *
    * @return string|null
    */
    public function getSourceValue()
    {
        return $this->container['sourceValue'];
    }

    /**
    * Sets sourceValue
    *
    * @param string|null $sourceValue 自定义时间字段value
    *
    * @return $this
    */
    public function setSourceValue($sourceValue)
    {
        $this->container['sourceValue'] = $sourceValue;
        return $this;
    }

    /**
    * Gets setTime
    *  是否开启自定义时间的开关
    *
    * @return bool|null
    */
    public function getSetTime()
    {
        return $this->container['setTime'];
    }

    /**
    * Sets setTime
    *
    * @param bool|null $setTime 是否开启自定义时间的开关
    *
    * @return $this
    */
    public function setSetTime($setTime)
    {
        $this->container['setTime'] = $setTime;
        return $this;
    }

    /**
    * Gets include
    *  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    *
    * @return map[string,string]|null
    */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
    * Sets include
    *
    * @param map[string,string]|null $include 日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    *
    * @return $this
    */
    public function setInclude($include)
    {
        $this->container['include'] = $include;
        return $this;
    }

    /**
    * Gets exclude
    *  日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    *
    * @return map[string,string]|null
    */
    public function getExclude()
    {
        return $this->container['exclude'];
    }

    /**
    * Sets exclude
    *
    * @param map[string,string]|null $exclude 日志过滤白名单规则 key长度最大为256，value最大长度为128，key不可以重复
    *
    * @return $this
    */
    public function setExclude($exclude)
    {
        $this->container['exclude'] = $exclude;
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

