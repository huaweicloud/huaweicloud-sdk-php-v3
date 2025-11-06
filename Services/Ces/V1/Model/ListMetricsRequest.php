<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMetricsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMetricsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dim0  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim1  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim2  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * limit  取值范围(0,1000]，默认值为1000。  用于限制结果数据条数。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * namespace  指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，总长度最短为3，最大为32；各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。
    * order  用于标识结果排序方法。  取值说明，默认为desc：  asc，升序 desc，降序
    * start  分页起始值，格式为：namespace.metric_name.key:value 例如：start=SYS.ECS.cpu_util.instance_id:d9112af5-6913-4f3b-bd0a-3f96711e004d
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dim0' => 'string',
            'dim1' => 'string',
            'dim2' => 'string',
            'limit' => 'int',
            'metricName' => 'string',
            'namespace' => 'string',
            'order' => 'string',
            'start' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dim0  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim1  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim2  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * limit  取值范围(0,1000]，默认值为1000。  用于限制结果数据条数。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * namespace  指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，总长度最短为3，最大为32；各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。
    * order  用于标识结果排序方法。  取值说明，默认为desc：  asc，升序 desc，降序
    * start  分页起始值，格式为：namespace.metric_name.key:value 例如：start=SYS.ECS.cpu_util.instance_id:d9112af5-6913-4f3b-bd0a-3f96711e004d
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dim0' => null,
        'dim1' => null,
        'dim2' => null,
        'limit' => 'int32',
        'metricName' => null,
        'namespace' => null,
        'order' => null,
        'start' => null
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
    * dim0  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim1  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim2  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * limit  取值范围(0,1000]，默认值为1000。  用于限制结果数据条数。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * namespace  指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，总长度最短为3，最大为32；各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。
    * order  用于标识结果排序方法。  取值说明，默认为desc：  asc，升序 desc，降序
    * start  分页起始值，格式为：namespace.metric_name.key:value 例如：start=SYS.ECS.cpu_util.instance_id:d9112af5-6913-4f3b-bd0a-3f96711e004d
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dim0' => 'dim.0',
            'dim1' => 'dim.1',
            'dim2' => 'dim.2',
            'limit' => 'limit',
            'metricName' => 'metric_name',
            'namespace' => 'namespace',
            'order' => 'order',
            'start' => 'start'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dim0  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim1  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim2  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * limit  取值范围(0,1000]，默认值为1000。  用于限制结果数据条数。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * namespace  指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，总长度最短为3，最大为32；各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。
    * order  用于标识结果排序方法。  取值说明，默认为desc：  asc，升序 desc，降序
    * start  分页起始值，格式为：namespace.metric_name.key:value 例如：start=SYS.ECS.cpu_util.instance_id:d9112af5-6913-4f3b-bd0a-3f96711e004d
    *
    * @var string[]
    */
    protected static $setters = [
            'dim0' => 'setDim0',
            'dim1' => 'setDim1',
            'dim2' => 'setDim2',
            'limit' => 'setLimit',
            'metricName' => 'setMetricName',
            'namespace' => 'setNamespace',
            'order' => 'setOrder',
            'start' => 'setStart'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dim0  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim1  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * dim2  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    * limit  取值范围(0,1000]，默认值为1000。  用于限制结果数据条数。
    * metricName  指标名称，例如弹性云服务器监控指标中的cpu_util；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    * namespace  指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，总长度最短为3，最大为32；各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。
    * order  用于标识结果排序方法。  取值说明，默认为desc：  asc，升序 desc，降序
    * start  分页起始值，格式为：namespace.metric_name.key:value 例如：start=SYS.ECS.cpu_util.instance_id:d9112af5-6913-4f3b-bd0a-3f96711e004d
    *
    * @var string[]
    */
    protected static $getters = [
            'dim0' => 'getDim0',
            'dim1' => 'getDim1',
            'dim2' => 'getDim2',
            'limit' => 'getLimit',
            'metricName' => 'getMetricName',
            'namespace' => 'getNamespace',
            'order' => 'getOrder',
            'start' => 'getStart'
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
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_ASC,
            self::ORDER_DESC,
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
        $this->container['dim0'] = isset($data['dim0']) ? $data['dim0'] : null;
        $this->container['dim1'] = isset($data['dim1']) ? $data['dim1'] : null;
        $this->container['dim2'] = isset($data['dim2']) ? $data['dim2'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dim0']) && (mb_strlen($this->container['dim0']) > 300)) {
                $invalidProperties[] = "invalid value for 'dim0', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['dim0']) && (mb_strlen($this->container['dim0']) < 1)) {
                $invalidProperties[] = "invalid value for 'dim0', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dim1']) && (mb_strlen($this->container['dim1']) > 300)) {
                $invalidProperties[] = "invalid value for 'dim1', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['dim1']) && (mb_strlen($this->container['dim1']) < 1)) {
                $invalidProperties[] = "invalid value for 'dim1', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dim2']) && (mb_strlen($this->container['dim2']) > 300)) {
                $invalidProperties[] = "invalid value for 'dim2', the character length must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['dim2']) && (mb_strlen($this->container['dim2']) < 1)) {
                $invalidProperties[] = "invalid value for 'dim2', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['metricName']) && (mb_strlen($this->container['metricName']) > 96)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be smaller than or equal to 96.";
            }
            if (!is_null($this->container['metricName']) && (mb_strlen($this->container['metricName']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['metricName']) && !preg_match("/^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/", $this->container['metricName'])) {
                $invalidProperties[] = "invalid value for 'metricName', must be conform to the pattern /^([A-Za-z]){1}([0-9A-Za-z]|_|-)*$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 3)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['start']) && !preg_match("/^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-)*(\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-)*\\:([a-z]|[A-Z]|[0-9]|\\*|_){1}([a-z]|[A-Z]|[0-9]|_|-|\\.)*){0,5}$/", $this->container['start'])) {
                $invalidProperties[] = "invalid value for 'start', must be conform to the pattern /^([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-)*(\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_|-)*\\:([a-z]|[A-Z]|[0-9]|\\*|_){1}([a-z]|[A-Z]|[0-9]|_|-|\\.)*){0,5}$/.";
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
    * Gets dim0
    *  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    *
    * @return string|null
    */
    public function getDim0()
    {
        return $this->container['dim0'];
    }

    /**
    * Sets dim0
    *
    * @param string|null $dim0 指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    *
    * @return $this
    */
    public function setDim0($dim0)
    {
        $this->container['dim0'] = $dim0;
        return $this;
    }

    /**
    * Gets dim1
    *  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    *
    * @return string|null
    */
    public function getDim1()
    {
        return $this->container['dim1'];
    }

    /**
    * Sets dim1
    *
    * @param string|null $dim1 指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    *
    * @return $this
    */
    public function setDim1($dim1)
    {
        $this->container['dim1'] = $dim1;
        return $this;
    }

    /**
    * Gets dim2
    *  指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    *
    * @return string|null
    */
    public function getDim2()
    {
        return $this->container['dim2'];
    }

    /**
    * Sets dim2
    *
    * @param string|null $dim2 指标的维度，目前最大支持3个维度，从0开始；维度格式为dim.{i}=key,value，最大值为256。 例如：instance_id,6f3c6f91-4b24-4e1b-b7d1-a94ac1cb011d；各服务资源的指标维度名称可查看：“[服务指标维度](ces_03_0059.xml)”。
    *
    * @return $this
    */
    public function setDim2($dim2)
    {
        $this->container['dim2'] = $dim2;
        return $this;
    }

    /**
    * Gets limit
    *  取值范围(0,1000]，默认值为1000。  用于限制结果数据条数。
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
    * @param int|null $limit 取值范围(0,1000]，默认值为1000。  用于限制结果数据条数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets metricName
    *  指标名称，例如弹性云服务器监控指标中的cpu_util；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @return string|null
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string|null $metricName 指标名称，例如弹性云服务器监控指标中的cpu_util；各服务的指标名称可查看：“[服务指标名称](ces_03_0059.xml)”。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets namespace
    *  指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，总长度最短为3，最大为32；各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，总长度最短为3，最大为32；各服务的命名空间可查看：“[服务命名空间](ces_03_0059.xml)”。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets order
    *  用于标识结果排序方法。  取值说明，默认为desc：  asc，升序 desc，降序
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 用于标识结果排序方法。  取值说明，默认为desc：  asc，升序 desc，降序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets start
    *  分页起始值，格式为：namespace.metric_name.key:value 例如：start=SYS.ECS.cpu_util.instance_id:d9112af5-6913-4f3b-bd0a-3f96711e004d
    *
    * @return string|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string|null $start 分页起始值，格式为：namespace.metric_name.key:value 例如：start=SYS.ECS.cpu_util.instance_id:d9112af5-6913-4f3b-bd0a-3f96711e004d
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
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

