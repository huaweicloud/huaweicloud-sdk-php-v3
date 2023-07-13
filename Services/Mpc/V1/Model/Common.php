<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Common implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Common';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pvc  是否开启高清低码功能。  取值如下： - false：关闭。 - true：开启。
    * hlsInterval  HLS分片间隔，仅封装类型“pack_type”取值为1或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * dashInterval  DASH间隔，仅封装类型“pack_type”取值为2或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * packType  封装类型。  取值如下： - 1：HLS - 2：DASH - 3：HLS+DASH - 4：MP4 - 5：MP3 - 6：ADTS  > pack_type设置为5和6时，不能设置视频参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pvc' => 'bool',
            'hlsInterval' => 'int',
            'dashInterval' => 'int',
            'packType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pvc  是否开启高清低码功能。  取值如下： - false：关闭。 - true：开启。
    * hlsInterval  HLS分片间隔，仅封装类型“pack_type”取值为1或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * dashInterval  DASH间隔，仅封装类型“pack_type”取值为2或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * packType  封装类型。  取值如下： - 1：HLS - 2：DASH - 3：HLS+DASH - 4：MP4 - 5：MP3 - 6：ADTS  > pack_type设置为5和6时，不能设置视频参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pvc' => null,
        'hlsInterval' => 'int32',
        'dashInterval' => 'int32',
        'packType' => 'int32'
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
    * pvc  是否开启高清低码功能。  取值如下： - false：关闭。 - true：开启。
    * hlsInterval  HLS分片间隔，仅封装类型“pack_type”取值为1或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * dashInterval  DASH间隔，仅封装类型“pack_type”取值为2或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * packType  封装类型。  取值如下： - 1：HLS - 2：DASH - 3：HLS+DASH - 4：MP4 - 5：MP3 - 6：ADTS  > pack_type设置为5和6时，不能设置视频参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pvc' => 'PVC',
            'hlsInterval' => 'hls_interval',
            'dashInterval' => 'dash_interval',
            'packType' => 'pack_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pvc  是否开启高清低码功能。  取值如下： - false：关闭。 - true：开启。
    * hlsInterval  HLS分片间隔，仅封装类型“pack_type”取值为1或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * dashInterval  DASH间隔，仅封装类型“pack_type”取值为2或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * packType  封装类型。  取值如下： - 1：HLS - 2：DASH - 3：HLS+DASH - 4：MP4 - 5：MP3 - 6：ADTS  > pack_type设置为5和6时，不能设置视频参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'pvc' => 'setPvc',
            'hlsInterval' => 'setHlsInterval',
            'dashInterval' => 'setDashInterval',
            'packType' => 'setPackType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pvc  是否开启高清低码功能。  取值如下： - false：关闭。 - true：开启。
    * hlsInterval  HLS分片间隔，仅封装类型“pack_type”取值为1或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * dashInterval  DASH间隔，仅封装类型“pack_type”取值为2或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    * packType  封装类型。  取值如下： - 1：HLS - 2：DASH - 3：HLS+DASH - 4：MP4 - 5：MP3 - 6：ADTS  > pack_type设置为5和6时，不能设置视频参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'pvc' => 'getPvc',
            'hlsInterval' => 'getHlsInterval',
            'dashInterval' => 'getDashInterval',
            'packType' => 'getPackType'
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
        $this->container['pvc'] = isset($data['pvc']) ? $data['pvc'] : false;
        $this->container['hlsInterval'] = isset($data['hlsInterval']) ? $data['hlsInterval'] : 5;
        $this->container['dashInterval'] = isset($data['dashInterval']) ? $data['dashInterval'] : 5;
        $this->container['packType'] = isset($data['packType']) ? $data['packType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hlsInterval']) && ($this->container['hlsInterval'] > 10)) {
                $invalidProperties[] = "invalid value for 'hlsInterval', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['hlsInterval']) && ($this->container['hlsInterval'] < 2)) {
                $invalidProperties[] = "invalid value for 'hlsInterval', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['dashInterval']) && ($this->container['dashInterval'] > 10)) {
                $invalidProperties[] = "invalid value for 'dashInterval', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['dashInterval']) && ($this->container['dashInterval'] < 2)) {
                $invalidProperties[] = "invalid value for 'dashInterval', must be bigger than or equal to 2.";
            }
        if ($this->container['packType'] === null) {
            $invalidProperties[] = "'packType' can't be null";
        }
            if (($this->container['packType'] > 6)) {
                $invalidProperties[] = "invalid value for 'packType', must be smaller than or equal to 6.";
            }
            if (($this->container['packType'] < 1)) {
                $invalidProperties[] = "invalid value for 'packType', must be bigger than or equal to 1.";
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
    * Gets pvc
    *  是否开启高清低码功能。  取值如下： - false：关闭。 - true：开启。
    *
    * @return bool|null
    */
    public function getPvc()
    {
        return $this->container['pvc'];
    }

    /**
    * Sets pvc
    *
    * @param bool|null $pvc 是否开启高清低码功能。  取值如下： - false：关闭。 - true：开启。
    *
    * @return $this
    */
    public function setPvc($pvc)
    {
        $this->container['pvc'] = $pvc;
        return $this;
    }

    /**
    * Gets hlsInterval
    *  HLS分片间隔，仅封装类型“pack_type”取值为1或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    *
    * @return int|null
    */
    public function getHlsInterval()
    {
        return $this->container['hlsInterval'];
    }

    /**
    * Sets hlsInterval
    *
    * @param int|null $hlsInterval HLS分片间隔，仅封装类型“pack_type”取值为1或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    *
    * @return $this
    */
    public function setHlsInterval($hlsInterval)
    {
        $this->container['hlsInterval'] = $hlsInterval;
        return $this;
    }

    /**
    * Gets dashInterval
    *  DASH间隔，仅封装类型“pack_type”取值为2或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    *
    * @return int|null
    */
    public function getDashInterval()
    {
        return $this->container['dashInterval'];
    }

    /**
    * Sets dashInterval
    *
    * @param int|null $dashInterval DASH间隔，仅封装类型“pack_type”取值为2或3时，该参数生效。  取值范围：[2，10]。  单位：秒。
    *
    * @return $this
    */
    public function setDashInterval($dashInterval)
    {
        $this->container['dashInterval'] = $dashInterval;
        return $this;
    }

    /**
    * Gets packType
    *  封装类型。  取值如下： - 1：HLS - 2：DASH - 3：HLS+DASH - 4：MP4 - 5：MP3 - 6：ADTS  > pack_type设置为5和6时，不能设置视频参数。
    *
    * @return int
    */
    public function getPackType()
    {
        return $this->container['packType'];
    }

    /**
    * Sets packType
    *
    * @param int $packType 封装类型。  取值如下： - 1：HLS - 2：DASH - 3：HLS+DASH - 4：MP4 - 5：MP3 - 6：ADTS  > pack_type设置为5和6时，不能设置视频参数。
    *
    * @return $this
    */
    public function setPackType($packType)
    {
        $this->container['packType'] = $packType;
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

