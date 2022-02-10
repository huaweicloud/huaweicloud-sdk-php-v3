<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TranscodeSpecCount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TranscodeSpecCount';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  转码规格，具体格式如下： - 若未开启高清低码，则格式为：编码格式_分辨率档位。 - 若已开启高清低码，则格式为：编码格式_PVC_分辨率档位。  其中，编码格式包括H264、H265，分辨率档位包括： - 4K：3840 x 2160及以下 - 2K：2560 x 1440及以下 - FHD：1920 x 1080及以下 - HD：1280 x 720及以下 - SD：640 x 480及以下  示例：若编码格式为H264，分辨率档位为FHD，则转码规格为H264_FHD。
    * count  采样时间点转码任务数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  转码规格，具体格式如下： - 若未开启高清低码，则格式为：编码格式_分辨率档位。 - 若已开启高清低码，则格式为：编码格式_PVC_分辨率档位。  其中，编码格式包括H264、H265，分辨率档位包括： - 4K：3840 x 2160及以下 - 2K：2560 x 1440及以下 - FHD：1920 x 1080及以下 - HD：1280 x 720及以下 - SD：640 x 480及以下  示例：若编码格式为H264，分辨率档位为FHD，则转码规格为H264_FHD。
    * count  采样时间点转码任务数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'count' => 'int64'
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
    * type  转码规格，具体格式如下： - 若未开启高清低码，则格式为：编码格式_分辨率档位。 - 若已开启高清低码，则格式为：编码格式_PVC_分辨率档位。  其中，编码格式包括H264、H265，分辨率档位包括： - 4K：3840 x 2160及以下 - 2K：2560 x 1440及以下 - FHD：1920 x 1080及以下 - HD：1280 x 720及以下 - SD：640 x 480及以下  示例：若编码格式为H264，分辨率档位为FHD，则转码规格为H264_FHD。
    * count  采样时间点转码任务数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  转码规格，具体格式如下： - 若未开启高清低码，则格式为：编码格式_分辨率档位。 - 若已开启高清低码，则格式为：编码格式_PVC_分辨率档位。  其中，编码格式包括H264、H265，分辨率档位包括： - 4K：3840 x 2160及以下 - 2K：2560 x 1440及以下 - FHD：1920 x 1080及以下 - HD：1280 x 720及以下 - SD：640 x 480及以下  示例：若编码格式为H264，分辨率档位为FHD，则转码规格为H264_FHD。
    * count  采样时间点转码任务数。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  转码规格，具体格式如下： - 若未开启高清低码，则格式为：编码格式_分辨率档位。 - 若已开启高清低码，则格式为：编码格式_PVC_分辨率档位。  其中，编码格式包括H264、H265，分辨率档位包括： - 4K：3840 x 2160及以下 - 2K：2560 x 1440及以下 - FHD：1920 x 1080及以下 - HD：1280 x 720及以下 - SD：640 x 480及以下  示例：若编码格式为H264，分辨率档位为FHD，则转码规格为H264_FHD。
    * count  采样时间点转码任务数。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'count' => 'getCount'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 1844674407)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1844674407.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
    * Gets type
    *  转码规格，具体格式如下： - 若未开启高清低码，则格式为：编码格式_分辨率档位。 - 若已开启高清低码，则格式为：编码格式_PVC_分辨率档位。  其中，编码格式包括H264、H265，分辨率档位包括： - 4K：3840 x 2160及以下 - 2K：2560 x 1440及以下 - FHD：1920 x 1080及以下 - HD：1280 x 720及以下 - SD：640 x 480及以下  示例：若编码格式为H264，分辨率档位为FHD，则转码规格为H264_FHD。
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
    * @param string|null $type 转码规格，具体格式如下： - 若未开启高清低码，则格式为：编码格式_分辨率档位。 - 若已开启高清低码，则格式为：编码格式_PVC_分辨率档位。  其中，编码格式包括H264、H265，分辨率档位包括： - 4K：3840 x 2160及以下 - 2K：2560 x 1440及以下 - FHD：1920 x 1080及以下 - HD：1280 x 720及以下 - SD：640 x 480及以下  示例：若编码格式为H264，分辨率档位为FHD，则转码规格为H264_FHD。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets count
    *  采样时间点转码任务数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 采样时间点转码任务数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

