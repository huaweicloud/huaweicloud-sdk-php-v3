<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connection  **参数解释**：最大并发连接数。单位：个。  **取值范围**：不涉及
    * cps  **参数解释**：每秒新建连接数。单位：个。  **取值范围**：不涉及
    * tlsConnection  **参数解释**：tls最大并发连接数。单位：个。  **取值范围**：不涉及
    * tlsCps  **参数解释**：tls每秒新建连接数。单位：个。  **取值范围**：不涉及
    * qps  **参数解释**：每秒查询速率。单位：个。仅7层LB有该指标。  **取值范围**：不涉及
    * bandwidth  **参数解释**：带宽。单位：Kbit/s。  **取值范围**：不涉及
    * lcu  **参数解释**：当前flavor对应的lcu数量。单位：个。  **取值范围**：不涉及  > LCU是用来衡量独享型ELB处理性能综合指标，LCU值越大，性能越好。
    * httpsCps  **参数解释**：https新建连接数，仅7层LB有该指标。单位：个。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connection' => 'int',
            'cps' => 'int',
            'tlsConnection' => 'int',
            'tlsCps' => 'int',
            'qps' => 'int',
            'bandwidth' => 'int',
            'lcu' => 'int',
            'httpsCps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connection  **参数解释**：最大并发连接数。单位：个。  **取值范围**：不涉及
    * cps  **参数解释**：每秒新建连接数。单位：个。  **取值范围**：不涉及
    * tlsConnection  **参数解释**：tls最大并发连接数。单位：个。  **取值范围**：不涉及
    * tlsCps  **参数解释**：tls每秒新建连接数。单位：个。  **取值范围**：不涉及
    * qps  **参数解释**：每秒查询速率。单位：个。仅7层LB有该指标。  **取值范围**：不涉及
    * bandwidth  **参数解释**：带宽。单位：Kbit/s。  **取值范围**：不涉及
    * lcu  **参数解释**：当前flavor对应的lcu数量。单位：个。  **取值范围**：不涉及  > LCU是用来衡量独享型ELB处理性能综合指标，LCU值越大，性能越好。
    * httpsCps  **参数解释**：https新建连接数，仅7层LB有该指标。单位：个。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connection' => 'int32',
        'cps' => 'int32',
        'tlsConnection' => 'int32',
        'tlsCps' => 'int32',
        'qps' => 'int32',
        'bandwidth' => 'int32',
        'lcu' => 'int32',
        'httpsCps' => 'int32'
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
    * connection  **参数解释**：最大并发连接数。单位：个。  **取值范围**：不涉及
    * cps  **参数解释**：每秒新建连接数。单位：个。  **取值范围**：不涉及
    * tlsConnection  **参数解释**：tls最大并发连接数。单位：个。  **取值范围**：不涉及
    * tlsCps  **参数解释**：tls每秒新建连接数。单位：个。  **取值范围**：不涉及
    * qps  **参数解释**：每秒查询速率。单位：个。仅7层LB有该指标。  **取值范围**：不涉及
    * bandwidth  **参数解释**：带宽。单位：Kbit/s。  **取值范围**：不涉及
    * lcu  **参数解释**：当前flavor对应的lcu数量。单位：个。  **取值范围**：不涉及  > LCU是用来衡量独享型ELB处理性能综合指标，LCU值越大，性能越好。
    * httpsCps  **参数解释**：https新建连接数，仅7层LB有该指标。单位：个。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connection' => 'connection',
            'cps' => 'cps',
            'tlsConnection' => 'tls_connection',
            'tlsCps' => 'tls_cps',
            'qps' => 'qps',
            'bandwidth' => 'bandwidth',
            'lcu' => 'lcu',
            'httpsCps' => 'https_cps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connection  **参数解释**：最大并发连接数。单位：个。  **取值范围**：不涉及
    * cps  **参数解释**：每秒新建连接数。单位：个。  **取值范围**：不涉及
    * tlsConnection  **参数解释**：tls最大并发连接数。单位：个。  **取值范围**：不涉及
    * tlsCps  **参数解释**：tls每秒新建连接数。单位：个。  **取值范围**：不涉及
    * qps  **参数解释**：每秒查询速率。单位：个。仅7层LB有该指标。  **取值范围**：不涉及
    * bandwidth  **参数解释**：带宽。单位：Kbit/s。  **取值范围**：不涉及
    * lcu  **参数解释**：当前flavor对应的lcu数量。单位：个。  **取值范围**：不涉及  > LCU是用来衡量独享型ELB处理性能综合指标，LCU值越大，性能越好。
    * httpsCps  **参数解释**：https新建连接数，仅7层LB有该指标。单位：个。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'connection' => 'setConnection',
            'cps' => 'setCps',
            'tlsConnection' => 'setTlsConnection',
            'tlsCps' => 'setTlsCps',
            'qps' => 'setQps',
            'bandwidth' => 'setBandwidth',
            'lcu' => 'setLcu',
            'httpsCps' => 'setHttpsCps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connection  **参数解释**：最大并发连接数。单位：个。  **取值范围**：不涉及
    * cps  **参数解释**：每秒新建连接数。单位：个。  **取值范围**：不涉及
    * tlsConnection  **参数解释**：tls最大并发连接数。单位：个。  **取值范围**：不涉及
    * tlsCps  **参数解释**：tls每秒新建连接数。单位：个。  **取值范围**：不涉及
    * qps  **参数解释**：每秒查询速率。单位：个。仅7层LB有该指标。  **取值范围**：不涉及
    * bandwidth  **参数解释**：带宽。单位：Kbit/s。  **取值范围**：不涉及
    * lcu  **参数解释**：当前flavor对应的lcu数量。单位：个。  **取值范围**：不涉及  > LCU是用来衡量独享型ELB处理性能综合指标，LCU值越大，性能越好。
    * httpsCps  **参数解释**：https新建连接数，仅7层LB有该指标。单位：个。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'connection' => 'getConnection',
            'cps' => 'getCps',
            'tlsConnection' => 'getTlsConnection',
            'tlsCps' => 'getTlsCps',
            'qps' => 'getQps',
            'bandwidth' => 'getBandwidth',
            'lcu' => 'getLcu',
            'httpsCps' => 'getHttpsCps'
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
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['cps'] = isset($data['cps']) ? $data['cps'] : null;
        $this->container['tlsConnection'] = isset($data['tlsConnection']) ? $data['tlsConnection'] : null;
        $this->container['tlsCps'] = isset($data['tlsCps']) ? $data['tlsCps'] : null;
        $this->container['qps'] = isset($data['qps']) ? $data['qps'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['lcu'] = isset($data['lcu']) ? $data['lcu'] : null;
        $this->container['httpsCps'] = isset($data['httpsCps']) ? $data['httpsCps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connection'] === null) {
            $invalidProperties[] = "'connection' can't be null";
        }
        if ($this->container['cps'] === null) {
            $invalidProperties[] = "'cps' can't be null";
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
    * Gets connection
    *  **参数解释**：最大并发连接数。单位：个。  **取值范围**：不涉及
    *
    * @return int
    */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
    * Sets connection
    *
    * @param int $connection **参数解释**：最大并发连接数。单位：个。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;
        return $this;
    }

    /**
    * Gets cps
    *  **参数解释**：每秒新建连接数。单位：个。  **取值范围**：不涉及
    *
    * @return int
    */
    public function getCps()
    {
        return $this->container['cps'];
    }

    /**
    * Sets cps
    *
    * @param int $cps **参数解释**：每秒新建连接数。单位：个。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setCps($cps)
    {
        $this->container['cps'] = $cps;
        return $this;
    }

    /**
    * Gets tlsConnection
    *  **参数解释**：tls最大并发连接数。单位：个。  **取值范围**：不涉及
    *
    * @return int|null
    */
    public function getTlsConnection()
    {
        return $this->container['tlsConnection'];
    }

    /**
    * Sets tlsConnection
    *
    * @param int|null $tlsConnection **参数解释**：tls最大并发连接数。单位：个。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setTlsConnection($tlsConnection)
    {
        $this->container['tlsConnection'] = $tlsConnection;
        return $this;
    }

    /**
    * Gets tlsCps
    *  **参数解释**：tls每秒新建连接数。单位：个。  **取值范围**：不涉及
    *
    * @return int|null
    */
    public function getTlsCps()
    {
        return $this->container['tlsCps'];
    }

    /**
    * Sets tlsCps
    *
    * @param int|null $tlsCps **参数解释**：tls每秒新建连接数。单位：个。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setTlsCps($tlsCps)
    {
        $this->container['tlsCps'] = $tlsCps;
        return $this;
    }

    /**
    * Gets qps
    *  **参数解释**：每秒查询速率。单位：个。仅7层LB有该指标。  **取值范围**：不涉及
    *
    * @return int|null
    */
    public function getQps()
    {
        return $this->container['qps'];
    }

    /**
    * Sets qps
    *
    * @param int|null $qps **参数解释**：每秒查询速率。单位：个。仅7层LB有该指标。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setQps($qps)
    {
        $this->container['qps'] = $qps;
        return $this;
    }

    /**
    * Gets bandwidth
    *  **参数解释**：带宽。单位：Kbit/s。  **取值范围**：不涉及
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth **参数解释**：带宽。单位：Kbit/s。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets lcu
    *  **参数解释**：当前flavor对应的lcu数量。单位：个。  **取值范围**：不涉及  > LCU是用来衡量独享型ELB处理性能综合指标，LCU值越大，性能越好。
    *
    * @return int|null
    */
    public function getLcu()
    {
        return $this->container['lcu'];
    }

    /**
    * Sets lcu
    *
    * @param int|null $lcu **参数解释**：当前flavor对应的lcu数量。单位：个。  **取值范围**：不涉及  > LCU是用来衡量独享型ELB处理性能综合指标，LCU值越大，性能越好。
    *
    * @return $this
    */
    public function setLcu($lcu)
    {
        $this->container['lcu'] = $lcu;
        return $this;
    }

    /**
    * Gets httpsCps
    *  **参数解释**：https新建连接数，仅7层LB有该指标。单位：个。  **取值范围**：不涉及
    *
    * @return int|null
    */
    public function getHttpsCps()
    {
        return $this->container['httpsCps'];
    }

    /**
    * Sets httpsCps
    *
    * @param int|null $httpsCps **参数解释**：https新建连接数，仅7层LB有该指标。单位：个。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setHttpsCps($httpsCps)
    {
        $this->container['httpsCps'] = $httpsCps;
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

