<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModResourceDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModResourceDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源标识。
    * type  资源类型，企业内ID和TYPE唯一标识一个资源项，若只传资源ID可能会修改多个资源的信息。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏
    * expireDate  到期时间。
    * isDisabled  资源是否被停用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'string',
            'expireDate' => 'int',
            'isDisabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源标识。
    * type  资源类型，企业内ID和TYPE唯一标识一个资源项，若只传资源ID可能会修改多个资源的信息。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏
    * expireDate  到期时间。
    * isDisabled  资源是否被停用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'expireDate' => 'int64',
        'isDisabled' => null
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
    * id  资源标识。
    * type  资源类型，企业内ID和TYPE唯一标识一个资源项，若只传资源ID可能会修改多个资源的信息。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏
    * expireDate  到期时间。
    * isDisabled  资源是否被停用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'expireDate' => 'expireDate',
            'isDisabled' => 'isDisabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源标识。
    * type  资源类型，企业内ID和TYPE唯一标识一个资源项，若只传资源ID可能会修改多个资源的信息。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏
    * expireDate  到期时间。
    * isDisabled  资源是否被停用。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'expireDate' => 'setExpireDate',
            'isDisabled' => 'setIsDisabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源标识。
    * type  资源类型，企业内ID和TYPE唯一标识一个资源项，若只传资源ID可能会修改多个资源的信息。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏
    * expireDate  到期时间。
    * isDisabled  资源是否被停用。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'expireDate' => 'getExpireDate',
            'isDisabled' => 'getIsDisabled'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['expireDate'] = isset($data['expireDate']) ? $data['expireDate'] : null;
        $this->container['isDisabled'] = isset($data['isDisabled']) ? $data['isDisabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['expireDate']) && ($this->container['expireDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'expireDate', must be bigger than or equal to 0.";
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
    * Gets id
    *  资源标识。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 资源标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  资源类型，企业内ID和TYPE唯一标识一个资源项，若只传资源ID可能会修改多个资源的信息。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏
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
    * @param string|null $type 资源类型，企业内ID和TYPE唯一标识一个资源项，若只传资源ID可能会修改多个资源的信息。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets expireDate
    *  到期时间。
    *
    * @return int|null
    */
    public function getExpireDate()
    {
        return $this->container['expireDate'];
    }

    /**
    * Sets expireDate
    *
    * @param int|null $expireDate 到期时间。
    *
    * @return $this
    */
    public function setExpireDate($expireDate)
    {
        $this->container['expireDate'] = $expireDate;
        return $this;
    }

    /**
    * Gets isDisabled
    *  资源是否被停用。
    *
    * @return bool|null
    */
    public function getIsDisabled()
    {
        return $this->container['isDisabled'];
    }

    /**
    * Sets isDisabled
    *
    * @param bool|null $isDisabled 资源是否被停用。
    *
    * @return $this
    */
    public function setIsDisabled($isDisabled)
    {
        $this->container['isDisabled'] = $isDisabled;
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

