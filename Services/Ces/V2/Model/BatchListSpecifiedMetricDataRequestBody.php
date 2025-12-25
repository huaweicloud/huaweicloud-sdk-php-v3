<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchListSpecifiedMetricDataRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchListSpecifiedMetricDataRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为64。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * metricDimension  **参数解释**: 资源维度信息, 多维度逗号分隔。 **约束限制**: 不涉及。 **取值范围**: 必须以字母开头，只能包含0-9/a-z/A-Z/_/-/,。每个维度必须以字母开头，每个维度长度最短1，最长32，多个维度直接用,分隔。 **默认取值**: 不涉及。
    * from  **参数解释**: 查询监控数据的开始时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * to  **参数解释**: 查询监控数据的结束时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 最小值为1，最大值为1000。 **默认取值**: 100。
    * offset  **参数解释**: 分页偏移量。 **约束限制**: 不涉及。 **取值范围**: 最小值为0，最大值为9999999。 **默认取值**: 0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'metricName' => 'string',
            'metricDimension' => 'string',
            'from' => 'int',
            'to' => 'int',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为64。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * metricDimension  **参数解释**: 资源维度信息, 多维度逗号分隔。 **约束限制**: 不涉及。 **取值范围**: 必须以字母开头，只能包含0-9/a-z/A-Z/_/-/,。每个维度必须以字母开头，每个维度长度最短1，最长32，多个维度直接用,分隔。 **默认取值**: 不涉及。
    * from  **参数解释**: 查询监控数据的开始时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * to  **参数解释**: 查询监控数据的结束时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 最小值为1，最大值为1000。 **默认取值**: 100。
    * offset  **参数解释**: 分页偏移量。 **约束限制**: 不涉及。 **取值范围**: 最小值为0，最大值为9999999。 **默认取值**: 0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'metricName' => null,
        'metricDimension' => null,
        'from' => 'int64',
        'to' => 'int64',
        'limit' => null,
        'offset' => null
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
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为64。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * metricDimension  **参数解释**: 资源维度信息, 多维度逗号分隔。 **约束限制**: 不涉及。 **取值范围**: 必须以字母开头，只能包含0-9/a-z/A-Z/_/-/,。每个维度必须以字母开头，每个维度长度最短1，最长32，多个维度直接用,分隔。 **默认取值**: 不涉及。
    * from  **参数解释**: 查询监控数据的开始时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * to  **参数解释**: 查询监控数据的结束时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 最小值为1，最大值为1000。 **默认取值**: 100。
    * offset  **参数解释**: 分页偏移量。 **约束限制**: 不涉及。 **取值范围**: 最小值为0，最大值为9999999。 **默认取值**: 0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'metricName' => 'metric_name',
            'metricDimension' => 'metric_dimension',
            'from' => 'from',
            'to' => 'to',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为64。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * metricDimension  **参数解释**: 资源维度信息, 多维度逗号分隔。 **约束限制**: 不涉及。 **取值范围**: 必须以字母开头，只能包含0-9/a-z/A-Z/_/-/,。每个维度必须以字母开头，每个维度长度最短1，最长32，多个维度直接用,分隔。 **默认取值**: 不涉及。
    * from  **参数解释**: 查询监控数据的开始时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * to  **参数解释**: 查询监控数据的结束时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 最小值为1，最大值为1000。 **默认取值**: 100。
    * offset  **参数解释**: 分页偏移量。 **约束限制**: 不涉及。 **取值范围**: 最小值为0，最大值为9999999。 **默认取值**: 0。
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'metricName' => 'setMetricName',
            'metricDimension' => 'setMetricDimension',
            'from' => 'setFrom',
            'to' => 'setTo',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    * metricName  **参数解释**： 资源的监控指标名称，各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为64。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    * metricDimension  **参数解释**: 资源维度信息, 多维度逗号分隔。 **约束限制**: 不涉及。 **取值范围**: 必须以字母开头，只能包含0-9/a-z/A-Z/_/-/,。每个维度必须以字母开头，每个维度长度最短1，最长32，多个维度直接用,分隔。 **默认取值**: 不涉及。
    * from  **参数解释**: 查询监控数据的开始时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * to  **参数解释**: 查询监控数据的结束时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    * limit  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 最小值为1，最大值为1000。 **默认取值**: 100。
    * offset  **参数解释**: 分页偏移量。 **约束限制**: 不涉及。 **取值范围**: 最小值为0，最大值为9999999。 **默认取值**: 0。
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'metricName' => 'getMetricName',
            'metricDimension' => 'getMetricDimension',
            'from' => 'getFrom',
            'to' => 'getTo',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['metricDimension'] = isset($data['metricDimension']) ? $data['metricDimension'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
            if ((mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
        }
            if ((mb_strlen($this->container['metricName']) > 64)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['metricName']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/", $this->container['metricName'])) {
                $invalidProperties[] = "invalid value for 'metricName', must be conform to the pattern /^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/.";
            }
        if ($this->container['metricDimension'] === null) {
            $invalidProperties[] = "'metricDimension' can't be null";
        }
            if ((mb_strlen($this->container['metricDimension']) > 131)) {
                $invalidProperties[] = "invalid value for 'metricDimension', the character length must be smaller than or equal to 131.";
            }
            if ((mb_strlen($this->container['metricDimension']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricDimension', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/", $this->container['metricDimension'])) {
                $invalidProperties[] = "invalid value for 'metricDimension', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}(,([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-){0,31}){0,3}$/.";
            }
            if (!is_null($this->container['from']) && ($this->container['from'] < 0)) {
                $invalidProperties[] = "invalid value for 'from', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['to']) && ($this->container['to'] < 0)) {
                $invalidProperties[] = "invalid value for 'to', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets namespace
    *  **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace **参数解释**： 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_。字符串的长度必须在 3 到 32个字符之间。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets metricName
    *  **参数解释**： 资源的监控指标名称，各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为64。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string $metricName **参数解释**： 资源的监控指标名称，各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。 **约束限制**： 不涉及。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_/-。字符长度最短为1，最大为64。如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率。         **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets metricDimension
    *  **参数解释**: 资源维度信息, 多维度逗号分隔。 **约束限制**: 不涉及。 **取值范围**: 必须以字母开头，只能包含0-9/a-z/A-Z/_/-/,。每个维度必须以字母开头，每个维度长度最短1，最长32，多个维度直接用,分隔。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getMetricDimension()
    {
        return $this->container['metricDimension'];
    }

    /**
    * Sets metricDimension
    *
    * @param string $metricDimension **参数解释**: 资源维度信息, 多维度逗号分隔。 **约束限制**: 不涉及。 **取值范围**: 必须以字母开头，只能包含0-9/a-z/A-Z/_/-/,。每个维度必须以字母开头，每个维度长度最短1，最长32，多个维度直接用,分隔。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setMetricDimension($metricDimension)
    {
        $this->container['metricDimension'] = $metricDimension;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释**: 查询监控数据的开始时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from **参数解释**: 查询监控数据的开始时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释**: 查询监控数据的结束时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to **参数解释**: 查询监控数据的结束时间，格式为时间戳, 单位毫秒。 **约束限制**: from必须小于to, to和from的时间间隔必须在5分钟内。 **取值范围**: 最小值为0。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 最小值为1，最大值为1000。 **默认取值**: 100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 分页大小。 **约束限制**: 不涉及。 **取值范围**: 最小值为1，最大值为1000。 **默认取值**: 100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 分页偏移量。 **约束限制**: 不涉及。 **取值范围**: 最小值为0，最大值为9999999。 **默认取值**: 0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 分页偏移量。 **约束限制**: 不涉及。 **取值范围**: 最小值为0，最大值为9999999。 **默认取值**: 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

