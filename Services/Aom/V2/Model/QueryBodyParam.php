<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryBodyParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryBodyParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  取值范围 app_log,node _log,custom_log 日志类型字段:app_log:应用日志 node_log:主机日志 custom_log:自定义配置路径日志。
    * endTime  搜索结束时间(UTC时间，毫秒级)。
    * hideSyslog  取值范围 0、1 。搜索时是否隐藏系统日志，默认0为隐藏1为显示。
    * keyWord  1.支持关键词精确搜索。关键词指相邻两个分词符之间的单词。 2.支持关键词模糊匹配搜索，例如输入“RROR”或“ERRO?”或“*ROR*”或“ERR*”或“ER*OR”。 3.支持短语精确搜索，例如输入“Start to refresh alm Statistic”。 4.支持关键词的“与”、“或”组合搜索。格式为“query&&logs”或“query||logs”。 说明： 当前默认分词符有  , '\";=()[]{}@&<>/:\\n\\t\\r
    * lineNum  日志单行序列号第一次查询时不需要此参数，后续分页查询时需要使用可从上次查询的返回信息中获取.
    * pageSizeSize  表示每次查询的日志条数不填时默认为5000，建议您设置为100。 第一次查询时使用pageSize 后续分页查询时使用size。
    * searchKey  searchKey
    * startTime  搜索起始时间(UTC时间，毫秒级)。
    * type  表示此次查询为分页查询，第一次查询时不需要此参数，后续分页查询时需要使用。
    * isDesc  标识按照lineNum升序查询还是降序查询。  true：降序（lineNum由大到小：时间从新到老）。  false：升序（lineNum由小到大：即时间从老到新）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'endTime' => 'int',
            'hideSyslog' => 'int',
            'keyWord' => 'string',
            'lineNum' => 'string',
            'pageSizeSize' => 'string',
            'searchKey' => '\HuaweiCloud\SDK\Aom\V2\Model\SearchKey',
            'startTime' => 'int',
            'type' => 'string',
            'isDesc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  取值范围 app_log,node _log,custom_log 日志类型字段:app_log:应用日志 node_log:主机日志 custom_log:自定义配置路径日志。
    * endTime  搜索结束时间(UTC时间，毫秒级)。
    * hideSyslog  取值范围 0、1 。搜索时是否隐藏系统日志，默认0为隐藏1为显示。
    * keyWord  1.支持关键词精确搜索。关键词指相邻两个分词符之间的单词。 2.支持关键词模糊匹配搜索，例如输入“RROR”或“ERRO?”或“*ROR*”或“ERR*”或“ER*OR”。 3.支持短语精确搜索，例如输入“Start to refresh alm Statistic”。 4.支持关键词的“与”、“或”组合搜索。格式为“query&&logs”或“query||logs”。 说明： 当前默认分词符有  , '\";=()[]{}@&<>/:\\n\\t\\r
    * lineNum  日志单行序列号第一次查询时不需要此参数，后续分页查询时需要使用可从上次查询的返回信息中获取.
    * pageSizeSize  表示每次查询的日志条数不填时默认为5000，建议您设置为100。 第一次查询时使用pageSize 后续分页查询时使用size。
    * searchKey  searchKey
    * startTime  搜索起始时间(UTC时间，毫秒级)。
    * type  表示此次查询为分页查询，第一次查询时不需要此参数，后续分页查询时需要使用。
    * isDesc  标识按照lineNum升序查询还是降序查询。  true：降序（lineNum由大到小：时间从新到老）。  false：升序（lineNum由小到大：即时间从老到新）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'endTime' => 'int64',
        'hideSyslog' => 'int32',
        'keyWord' => null,
        'lineNum' => null,
        'pageSizeSize' => null,
        'searchKey' => null,
        'startTime' => 'int64',
        'type' => null,
        'isDesc' => null
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
    * category  取值范围 app_log,node _log,custom_log 日志类型字段:app_log:应用日志 node_log:主机日志 custom_log:自定义配置路径日志。
    * endTime  搜索结束时间(UTC时间，毫秒级)。
    * hideSyslog  取值范围 0、1 。搜索时是否隐藏系统日志，默认0为隐藏1为显示。
    * keyWord  1.支持关键词精确搜索。关键词指相邻两个分词符之间的单词。 2.支持关键词模糊匹配搜索，例如输入“RROR”或“ERRO?”或“*ROR*”或“ERR*”或“ER*OR”。 3.支持短语精确搜索，例如输入“Start to refresh alm Statistic”。 4.支持关键词的“与”、“或”组合搜索。格式为“query&&logs”或“query||logs”。 说明： 当前默认分词符有  , '\";=()[]{}@&<>/:\\n\\t\\r
    * lineNum  日志单行序列号第一次查询时不需要此参数，后续分页查询时需要使用可从上次查询的返回信息中获取.
    * pageSizeSize  表示每次查询的日志条数不填时默认为5000，建议您设置为100。 第一次查询时使用pageSize 后续分页查询时使用size。
    * searchKey  searchKey
    * startTime  搜索起始时间(UTC时间，毫秒级)。
    * type  表示此次查询为分页查询，第一次查询时不需要此参数，后续分页查询时需要使用。
    * isDesc  标识按照lineNum升序查询还是降序查询。  true：降序（lineNum由大到小：时间从新到老）。  false：升序（lineNum由小到大：即时间从老到新）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'endTime' => 'endTime',
            'hideSyslog' => 'hideSyslog',
            'keyWord' => 'keyWord',
            'lineNum' => 'lineNum',
            'pageSizeSize' => 'pageSize/size',
            'searchKey' => 'searchKey',
            'startTime' => 'startTime',
            'type' => 'type',
            'isDesc' => 'isDesc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  取值范围 app_log,node _log,custom_log 日志类型字段:app_log:应用日志 node_log:主机日志 custom_log:自定义配置路径日志。
    * endTime  搜索结束时间(UTC时间，毫秒级)。
    * hideSyslog  取值范围 0、1 。搜索时是否隐藏系统日志，默认0为隐藏1为显示。
    * keyWord  1.支持关键词精确搜索。关键词指相邻两个分词符之间的单词。 2.支持关键词模糊匹配搜索，例如输入“RROR”或“ERRO?”或“*ROR*”或“ERR*”或“ER*OR”。 3.支持短语精确搜索，例如输入“Start to refresh alm Statistic”。 4.支持关键词的“与”、“或”组合搜索。格式为“query&&logs”或“query||logs”。 说明： 当前默认分词符有  , '\";=()[]{}@&<>/:\\n\\t\\r
    * lineNum  日志单行序列号第一次查询时不需要此参数，后续分页查询时需要使用可从上次查询的返回信息中获取.
    * pageSizeSize  表示每次查询的日志条数不填时默认为5000，建议您设置为100。 第一次查询时使用pageSize 后续分页查询时使用size。
    * searchKey  searchKey
    * startTime  搜索起始时间(UTC时间，毫秒级)。
    * type  表示此次查询为分页查询，第一次查询时不需要此参数，后续分页查询时需要使用。
    * isDesc  标识按照lineNum升序查询还是降序查询。  true：降序（lineNum由大到小：时间从新到老）。  false：升序（lineNum由小到大：即时间从老到新）。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'endTime' => 'setEndTime',
            'hideSyslog' => 'setHideSyslog',
            'keyWord' => 'setKeyWord',
            'lineNum' => 'setLineNum',
            'pageSizeSize' => 'setPageSizeSize',
            'searchKey' => 'setSearchKey',
            'startTime' => 'setStartTime',
            'type' => 'setType',
            'isDesc' => 'setIsDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  取值范围 app_log,node _log,custom_log 日志类型字段:app_log:应用日志 node_log:主机日志 custom_log:自定义配置路径日志。
    * endTime  搜索结束时间(UTC时间，毫秒级)。
    * hideSyslog  取值范围 0、1 。搜索时是否隐藏系统日志，默认0为隐藏1为显示。
    * keyWord  1.支持关键词精确搜索。关键词指相邻两个分词符之间的单词。 2.支持关键词模糊匹配搜索，例如输入“RROR”或“ERRO?”或“*ROR*”或“ERR*”或“ER*OR”。 3.支持短语精确搜索，例如输入“Start to refresh alm Statistic”。 4.支持关键词的“与”、“或”组合搜索。格式为“query&&logs”或“query||logs”。 说明： 当前默认分词符有  , '\";=()[]{}@&<>/:\\n\\t\\r
    * lineNum  日志单行序列号第一次查询时不需要此参数，后续分页查询时需要使用可从上次查询的返回信息中获取.
    * pageSizeSize  表示每次查询的日志条数不填时默认为5000，建议您设置为100。 第一次查询时使用pageSize 后续分页查询时使用size。
    * searchKey  searchKey
    * startTime  搜索起始时间(UTC时间，毫秒级)。
    * type  表示此次查询为分页查询，第一次查询时不需要此参数，后续分页查询时需要使用。
    * isDesc  标识按照lineNum升序查询还是降序查询。  true：降序（lineNum由大到小：时间从新到老）。  false：升序（lineNum由小到大：即时间从老到新）。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'endTime' => 'getEndTime',
            'hideSyslog' => 'getHideSyslog',
            'keyWord' => 'getKeyWord',
            'lineNum' => 'getLineNum',
            'pageSizeSize' => 'getPageSizeSize',
            'searchKey' => 'getSearchKey',
            'startTime' => 'getStartTime',
            'type' => 'getType',
            'isDesc' => 'getIsDesc'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['hideSyslog'] = isset($data['hideSyslog']) ? $data['hideSyslog'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
        $this->container['pageSizeSize'] = isset($data['pageSizeSize']) ? $data['pageSizeSize'] : null;
        $this->container['searchKey'] = isset($data['searchKey']) ? $data['searchKey'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isDesc'] = isset($data['isDesc']) ? $data['isDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['searchKey'] === null) {
            $invalidProperties[] = "'searchKey' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
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
    * Gets category
    *  取值范围 app_log,node _log,custom_log 日志类型字段:app_log:应用日志 node_log:主机日志 custom_log:自定义配置路径日志。
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 取值范围 app_log,node _log,custom_log 日志类型字段:app_log:应用日志 node_log:主机日志 custom_log:自定义配置路径日志。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets endTime
    *  搜索结束时间(UTC时间，毫秒级)。
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 搜索结束时间(UTC时间，毫秒级)。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets hideSyslog
    *  取值范围 0、1 。搜索时是否隐藏系统日志，默认0为隐藏1为显示。
    *
    * @return int|null
    */
    public function getHideSyslog()
    {
        return $this->container['hideSyslog'];
    }

    /**
    * Sets hideSyslog
    *
    * @param int|null $hideSyslog 取值范围 0、1 。搜索时是否隐藏系统日志，默认0为隐藏1为显示。
    *
    * @return $this
    */
    public function setHideSyslog($hideSyslog)
    {
        $this->container['hideSyslog'] = $hideSyslog;
        return $this;
    }

    /**
    * Gets keyWord
    *  1.支持关键词精确搜索。关键词指相邻两个分词符之间的单词。 2.支持关键词模糊匹配搜索，例如输入“RROR”或“ERRO?”或“*ROR*”或“ERR*”或“ER*OR”。 3.支持短语精确搜索，例如输入“Start to refresh alm Statistic”。 4.支持关键词的“与”、“或”组合搜索。格式为“query&&logs”或“query||logs”。 说明： 当前默认分词符有  , '\";=()[]{}@&<>/:\\n\\t\\r
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord 1.支持关键词精确搜索。关键词指相邻两个分词符之间的单词。 2.支持关键词模糊匹配搜索，例如输入“RROR”或“ERRO?”或“*ROR*”或“ERR*”或“ER*OR”。 3.支持短语精确搜索，例如输入“Start to refresh alm Statistic”。 4.支持关键词的“与”、“或”组合搜索。格式为“query&&logs”或“query||logs”。 说明： 当前默认分词符有  , '\";=()[]{}@&<>/:\\n\\t\\r
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets lineNum
    *  日志单行序列号第一次查询时不需要此参数，后续分页查询时需要使用可从上次查询的返回信息中获取.
    *
    * @return string|null
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string|null $lineNum 日志单行序列号第一次查询时不需要此参数，后续分页查询时需要使用可从上次查询的返回信息中获取.
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
        return $this;
    }

    /**
    * Gets pageSizeSize
    *  表示每次查询的日志条数不填时默认为5000，建议您设置为100。 第一次查询时使用pageSize 后续分页查询时使用size。
    *
    * @return string|null
    */
    public function getPageSizeSize()
    {
        return $this->container['pageSizeSize'];
    }

    /**
    * Sets pageSizeSize
    *
    * @param string|null $pageSizeSize 表示每次查询的日志条数不填时默认为5000，建议您设置为100。 第一次查询时使用pageSize 后续分页查询时使用size。
    *
    * @return $this
    */
    public function setPageSizeSize($pageSizeSize)
    {
        $this->container['pageSizeSize'] = $pageSizeSize;
        return $this;
    }

    /**
    * Gets searchKey
    *  searchKey
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\SearchKey
    */
    public function getSearchKey()
    {
        return $this->container['searchKey'];
    }

    /**
    * Sets searchKey
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\SearchKey $searchKey searchKey
    *
    * @return $this
    */
    public function setSearchKey($searchKey)
    {
        $this->container['searchKey'] = $searchKey;
        return $this;
    }

    /**
    * Gets startTime
    *  搜索起始时间(UTC时间，毫秒级)。
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 搜索起始时间(UTC时间，毫秒级)。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets type
    *  表示此次查询为分页查询，第一次查询时不需要此参数，后续分页查询时需要使用。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 表示此次查询为分页查询，第一次查询时不需要此参数，后续分页查询时需要使用。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets isDesc
    *  标识按照lineNum升序查询还是降序查询。  true：降序（lineNum由大到小：时间从新到老）。  false：升序（lineNum由小到大：即时间从老到新）。
    *
    * @return bool|null
    */
    public function getIsDesc()
    {
        return $this->container['isDesc'];
    }

    /**
    * Sets isDesc
    *
    * @param bool|null $isDesc 标识按照lineNum升序查询还是降序查询。  true：降序（lineNum由大到小：时间从新到老）。  false：升序（lineNum由小到大：即时间从老到新）。
    *
    * @return $this
    */
    public function setIsDesc($isDesc)
    {
        $this->container['isDesc'] = $isDesc;
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

