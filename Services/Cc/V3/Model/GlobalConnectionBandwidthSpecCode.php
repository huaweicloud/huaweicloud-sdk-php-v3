<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalConnectionBandwidthSpecCode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalConnectionBandwidthSpecCode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * localArea  功能说明：本端接入点，配合remote_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * remoteArea  功能说明：远端接入点，配合local_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * nameZh  功能说明：线路规格中文名。
    * nameEn  功能说明：线路规格英文名。
    * level  支持的线路等级： - Pt: 铂金 - Au: 金 - Ag: 银
    * sku  功能描述：GCB特定线路规格产品编码。
    * size  功能描述：带宽起售值，单位Mbps。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'localArea' => 'string',
            'remoteArea' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'nameZh' => 'string',
            'nameEn' => 'string',
            'level' => 'string',
            'sku' => 'string',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * localArea  功能说明：本端接入点，配合remote_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * remoteArea  功能说明：远端接入点，配合local_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * nameZh  功能说明：线路规格中文名。
    * nameEn  功能说明：线路规格英文名。
    * level  支持的线路等级： - Pt: 铂金 - Au: 金 - Ag: 银
    * sku  功能描述：GCB特定线路规格产品编码。
    * size  功能描述：带宽起售值，单位Mbps。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'localArea' => null,
        'remoteArea' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'nameZh' => null,
        'nameEn' => null,
        'level' => null,
        'sku' => null,
        'size' => null
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
    * id  实例ID。
    * localArea  功能说明：本端接入点，配合remote_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * remoteArea  功能说明：远端接入点，配合local_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * nameZh  功能说明：线路规格中文名。
    * nameEn  功能说明：线路规格英文名。
    * level  支持的线路等级： - Pt: 铂金 - Au: 金 - Ag: 银
    * sku  功能描述：GCB特定线路规格产品编码。
    * size  功能描述：带宽起售值，单位Mbps。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'localArea' => 'local_area',
            'remoteArea' => 'remote_area',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'nameZh' => 'name_zh',
            'nameEn' => 'name_en',
            'level' => 'level',
            'sku' => 'sku',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * localArea  功能说明：本端接入点，配合remote_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * remoteArea  功能说明：远端接入点，配合local_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * nameZh  功能说明：线路规格中文名。
    * nameEn  功能说明：线路规格英文名。
    * level  支持的线路等级： - Pt: 铂金 - Au: 金 - Ag: 银
    * sku  功能描述：GCB特定线路规格产品编码。
    * size  功能描述：带宽起售值，单位Mbps。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'localArea' => 'setLocalArea',
            'remoteArea' => 'setRemoteArea',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'nameZh' => 'setNameZh',
            'nameEn' => 'setNameEn',
            'level' => 'setLevel',
            'sku' => 'setSku',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * localArea  功能说明：本端接入点，配合remote_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * remoteArea  功能说明：远端接入点，配合local_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * nameZh  功能说明：线路规格中文名。
    * nameEn  功能说明：线路规格英文名。
    * level  支持的线路等级： - Pt: 铂金 - Au: 金 - Ag: 银
    * sku  功能描述：GCB特定线路规格产品编码。
    * size  功能描述：带宽起售值，单位Mbps。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'localArea' => 'getLocalArea',
            'remoteArea' => 'getRemoteArea',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'nameZh' => 'getNameZh',
            'nameEn' => 'getNameEn',
            'level' => 'getLevel',
            'sku' => 'getSku',
            'size' => 'getSize'
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
    const LEVEL_PT = 'Pt';
    const LEVEL_AU = 'Au';
    const LEVEL_AG = 'Ag';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_PT,
            self::LEVEL_AU,
            self::LEVEL_AG,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['localArea'] = isset($data['localArea']) ? $data['localArea'] : null;
        $this->container['remoteArea'] = isset($data['remoteArea']) ? $data['remoteArea'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['nameZh'] = isset($data['nameZh']) ? $data['nameZh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['localArea']) && (mb_strlen($this->container['localArea']) > 36)) {
                $invalidProperties[] = "invalid value for 'localArea', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['localArea']) && (mb_strlen($this->container['localArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'localArea', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) > 36)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['remoteArea']) && (mb_strlen($this->container['remoteArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'remoteArea', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getLevelAllowableValues();
                if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 64)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 64)) {
                $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) < 0)) {
                $invalidProperties[] = "invalid value for 'sku', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 999999)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 999999.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 2)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 2.";
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
    *  实例ID。
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
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets localArea
    *  功能说明：本端接入点，配合remote_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    *
    * @return string|null
    */
    public function getLocalArea()
    {
        return $this->container['localArea'];
    }

    /**
    * Sets localArea
    *
    * @param string|null $localArea 功能说明：本端接入点，配合remote_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    *
    * @return $this
    */
    public function setLocalArea($localArea)
    {
        $this->container['localArea'] = $localArea;
        return $this;
    }

    /**
    * Gets remoteArea
    *  功能说明：远端接入点，配合local_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    *
    * @return string|null
    */
    public function getRemoteArea()
    {
        return $this->container['remoteArea'];
    }

    /**
    * Sets remoteArea
    *
    * @param string|null $remoteArea 功能说明：远端接入点，配合local_area信息描述带宽实例应用的范围。 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点），站点编码通过接口获取，带宽类型为Region可不传，其他类型必传
    *
    * @return $this
    */
    public function setRemoteArea($remoteArea)
    {
        $this->container['remoteArea'] = $remoteArea;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets nameZh
    *  功能说明：线路规格中文名。
    *
    * @return string|null
    */
    public function getNameZh()
    {
        return $this->container['nameZh'];
    }

    /**
    * Sets nameZh
    *
    * @param string|null $nameZh 功能说明：线路规格中文名。
    *
    * @return $this
    */
    public function setNameZh($nameZh)
    {
        $this->container['nameZh'] = $nameZh;
        return $this;
    }

    /**
    * Gets nameEn
    *  功能说明：线路规格英文名。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 功能说明：线路规格英文名。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets level
    *  支持的线路等级： - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 支持的线路等级： - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets sku
    *  功能描述：GCB特定线路规格产品编码。
    *
    * @return string|null
    */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
    * Sets sku
    *
    * @param string|null $sku 功能描述：GCB特定线路规格产品编码。
    *
    * @return $this
    */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;
        return $this;
    }

    /**
    * Gets size
    *  功能描述：带宽起售值，单位Mbps。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 功能描述：带宽起售值，单位Mbps。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

