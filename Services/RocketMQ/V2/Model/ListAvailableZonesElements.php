<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAvailableZonesElements implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAvailableZonesElements';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * soldOut  **参数解释**： 是否售罄。 **约束限制**： 不涉及。 **取值范围**： - true：售罄。 - false：未售罄。 **默认取值**： 不涉及。
    * id  **参数解释**： 可用区ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * code  **参数解释**： 可用区编码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 可用区名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * port  **参数解释**： 可用区端口号。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * resourceAvailability  **参数解释**： 分区上是否还有可用资源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * defaultAz  **参数解释**： 是否为默认可用区。 **约束限制**： 不涉及。 **取值范围**： - true：默认可用区 - false：不是默认可用区 **默认取值**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * mode  **参数解释**： AZ模式。 **取值范围**： - dedicated：边缘AZ - shared：本地AZ - center：中心AZ
    * scope  **参数解释**： 可用区分组。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'soldOut' => 'bool',
            'id' => 'string',
            'code' => 'string',
            'name' => 'string',
            'port' => 'string',
            'resourceAvailability' => 'string',
            'defaultAz' => 'bool',
            'remainTime' => 'int',
            'ipv6Enable' => 'bool',
            'mode' => 'string',
            'scope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * soldOut  **参数解释**： 是否售罄。 **约束限制**： 不涉及。 **取值范围**： - true：售罄。 - false：未售罄。 **默认取值**： 不涉及。
    * id  **参数解释**： 可用区ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * code  **参数解释**： 可用区编码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 可用区名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * port  **参数解释**： 可用区端口号。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * resourceAvailability  **参数解释**： 分区上是否还有可用资源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * defaultAz  **参数解释**： 是否为默认可用区。 **约束限制**： 不涉及。 **取值范围**： - true：默认可用区 - false：不是默认可用区 **默认取值**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * mode  **参数解释**： AZ模式。 **取值范围**： - dedicated：边缘AZ - shared：本地AZ - center：中心AZ
    * scope  **参数解释**： 可用区分组。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'soldOut' => null,
        'id' => null,
        'code' => null,
        'name' => null,
        'port' => null,
        'resourceAvailability' => null,
        'defaultAz' => null,
        'remainTime' => 'int64',
        'ipv6Enable' => null,
        'mode' => null,
        'scope' => null
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
    * soldOut  **参数解释**： 是否售罄。 **约束限制**： 不涉及。 **取值范围**： - true：售罄。 - false：未售罄。 **默认取值**： 不涉及。
    * id  **参数解释**： 可用区ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * code  **参数解释**： 可用区编码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 可用区名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * port  **参数解释**： 可用区端口号。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * resourceAvailability  **参数解释**： 分区上是否还有可用资源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * defaultAz  **参数解释**： 是否为默认可用区。 **约束限制**： 不涉及。 **取值范围**： - true：默认可用区 - false：不是默认可用区 **默认取值**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * mode  **参数解释**： AZ模式。 **取值范围**： - dedicated：边缘AZ - shared：本地AZ - center：中心AZ
    * scope  **参数解释**： 可用区分组。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'soldOut' => 'soldOut',
            'id' => 'id',
            'code' => 'code',
            'name' => 'name',
            'port' => 'port',
            'resourceAvailability' => 'resource_availability',
            'defaultAz' => 'default_az',
            'remainTime' => 'remain_time',
            'ipv6Enable' => 'ipv6_enable',
            'mode' => 'mode',
            'scope' => 'scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * soldOut  **参数解释**： 是否售罄。 **约束限制**： 不涉及。 **取值范围**： - true：售罄。 - false：未售罄。 **默认取值**： 不涉及。
    * id  **参数解释**： 可用区ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * code  **参数解释**： 可用区编码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 可用区名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * port  **参数解释**： 可用区端口号。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * resourceAvailability  **参数解释**： 分区上是否还有可用资源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * defaultAz  **参数解释**： 是否为默认可用区。 **约束限制**： 不涉及。 **取值范围**： - true：默认可用区 - false：不是默认可用区 **默认取值**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * mode  **参数解释**： AZ模式。 **取值范围**： - dedicated：边缘AZ - shared：本地AZ - center：中心AZ
    * scope  **参数解释**： 可用区分组。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'soldOut' => 'setSoldOut',
            'id' => 'setId',
            'code' => 'setCode',
            'name' => 'setName',
            'port' => 'setPort',
            'resourceAvailability' => 'setResourceAvailability',
            'defaultAz' => 'setDefaultAz',
            'remainTime' => 'setRemainTime',
            'ipv6Enable' => 'setIpv6Enable',
            'mode' => 'setMode',
            'scope' => 'setScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * soldOut  **参数解释**： 是否售罄。 **约束限制**： 不涉及。 **取值范围**： - true：售罄。 - false：未售罄。 **默认取值**： 不涉及。
    * id  **参数解释**： 可用区ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * code  **参数解释**： 可用区编码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 可用区名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * port  **参数解释**： 可用区端口号。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * resourceAvailability  **参数解释**： 分区上是否还有可用资源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * defaultAz  **参数解释**： 是否为默认可用区。 **约束限制**： 不涉及。 **取值范围**： - true：默认可用区 - false：不是默认可用区 **默认取值**： 不涉及。
    * remainTime  **参数解释**： 剩余时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipv6Enable  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    * mode  **参数解释**： AZ模式。 **取值范围**： - dedicated：边缘AZ - shared：本地AZ - center：中心AZ
    * scope  **参数解释**： 可用区分组。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'soldOut' => 'getSoldOut',
            'id' => 'getId',
            'code' => 'getCode',
            'name' => 'getName',
            'port' => 'getPort',
            'resourceAvailability' => 'getResourceAvailability',
            'defaultAz' => 'getDefaultAz',
            'remainTime' => 'getRemainTime',
            'ipv6Enable' => 'getIpv6Enable',
            'mode' => 'getMode',
            'scope' => 'getScope'
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
        $this->container['soldOut'] = isset($data['soldOut']) ? $data['soldOut'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['resourceAvailability'] = isset($data['resourceAvailability']) ? $data['resourceAvailability'] : null;
        $this->container['defaultAz'] = isset($data['defaultAz']) ? $data['defaultAz'] : null;
        $this->container['remainTime'] = isset($data['remainTime']) ? $data['remainTime'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
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
    * Gets soldOut
    *  **参数解释**： 是否售罄。 **约束限制**： 不涉及。 **取值范围**： - true：售罄。 - false：未售罄。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getSoldOut()
    {
        return $this->container['soldOut'];
    }

    /**
    * Sets soldOut
    *
    * @param bool|null $soldOut **参数解释**： 是否售罄。 **约束限制**： 不涉及。 **取值范围**： - true：售罄。 - false：未售罄。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSoldOut($soldOut)
    {
        $this->container['soldOut'] = $soldOut;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 可用区ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 可用区ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets code
    *  **参数解释**： 可用区编码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释**： 可用区编码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 可用区名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 可用区名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**： 可用区端口号。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port **参数解释**： 可用区端口号。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets resourceAvailability
    *  **参数解释**： 分区上是否还有可用资源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getResourceAvailability()
    {
        return $this->container['resourceAvailability'];
    }

    /**
    * Sets resourceAvailability
    *
    * @param string|null $resourceAvailability **参数解释**： 分区上是否还有可用资源。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setResourceAvailability($resourceAvailability)
    {
        $this->container['resourceAvailability'] = $resourceAvailability;
        return $this;
    }

    /**
    * Gets defaultAz
    *  **参数解释**： 是否为默认可用区。 **约束限制**： 不涉及。 **取值范围**： - true：默认可用区 - false：不是默认可用区 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getDefaultAz()
    {
        return $this->container['defaultAz'];
    }

    /**
    * Sets defaultAz
    *
    * @param bool|null $defaultAz **参数解释**： 是否为默认可用区。 **约束限制**： 不涉及。 **取值范围**： - true：默认可用区 - false：不是默认可用区 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDefaultAz($defaultAz)
    {
        $this->container['defaultAz'] = $defaultAz;
        return $this;
    }

    /**
    * Gets remainTime
    *  **参数解释**： 剩余时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getRemainTime()
    {
        return $this->container['remainTime'];
    }

    /**
    * Sets remainTime
    *
    * @param int|null $remainTime **参数解释**： 剩余时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRemainTime($remainTime)
    {
        $this->container['remainTime'] = $remainTime;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable **参数解释**： 是否支持IPv6。[华为云Stack不支持此参数。](tag:hcs,hcs_oemout) **约束限制**： 不涉及。 **取值范围**： - true：支持 - false：不支持 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**： AZ模式。 **取值范围**： - dedicated：边缘AZ - shared：本地AZ - center：中心AZ
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**： AZ模式。 **取值范围**： - dedicated：边缘AZ - shared：本地AZ - center：中心AZ
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释**： 可用区分组。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope **参数解释**： 可用区分组。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
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

