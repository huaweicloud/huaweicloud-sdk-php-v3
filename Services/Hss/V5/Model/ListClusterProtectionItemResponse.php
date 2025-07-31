<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterProtectionItemResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterProtectionItemResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNum  总数
    * vuls  漏洞信息
    * baselines  基线信息
    * malwares  恶意文件信息
    * images  镜像信息
    * clusters  集群信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNum' => 'int',
            'vuls' => 'string[]',
            'baselines' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterBaselineResponseInfo[]',
            'malwares' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterMalwareResponseInfo[]',
            'images' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterImageResponseInfo[]',
            'clusters' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterItemResponseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNum  总数
    * vuls  漏洞信息
    * baselines  基线信息
    * malwares  恶意文件信息
    * images  镜像信息
    * clusters  集群信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNum' => 'int32',
        'vuls' => null,
        'baselines' => null,
        'malwares' => null,
        'images' => null,
        'clusters' => null
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
    * totalNum  总数
    * vuls  漏洞信息
    * baselines  基线信息
    * malwares  恶意文件信息
    * images  镜像信息
    * clusters  集群信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNum' => 'total_num',
            'vuls' => 'vuls',
            'baselines' => 'baselines',
            'malwares' => 'malwares',
            'images' => 'images',
            'clusters' => 'clusters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNum  总数
    * vuls  漏洞信息
    * baselines  基线信息
    * malwares  恶意文件信息
    * images  镜像信息
    * clusters  集群信息
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNum' => 'setTotalNum',
            'vuls' => 'setVuls',
            'baselines' => 'setBaselines',
            'malwares' => 'setMalwares',
            'images' => 'setImages',
            'clusters' => 'setClusters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNum  总数
    * vuls  漏洞信息
    * baselines  基线信息
    * malwares  恶意文件信息
    * images  镜像信息
    * clusters  集群信息
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNum' => 'getTotalNum',
            'vuls' => 'getVuls',
            'baselines' => 'getBaselines',
            'malwares' => 'getMalwares',
            'images' => 'getImages',
            'clusters' => 'getClusters'
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
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['vuls'] = isset($data['vuls']) ? $data['vuls'] : null;
        $this->container['baselines'] = isset($data['baselines']) ? $data['baselines'] : null;
        $this->container['malwares'] = isset($data['malwares']) ? $data['malwares'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
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
    * Gets totalNum
    *  总数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 总数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets vuls
    *  漏洞信息
    *
    * @return string[]|null
    */
    public function getVuls()
    {
        return $this->container['vuls'];
    }

    /**
    * Sets vuls
    *
    * @param string[]|null $vuls 漏洞信息
    *
    * @return $this
    */
    public function setVuls($vuls)
    {
        $this->container['vuls'] = $vuls;
        return $this;
    }

    /**
    * Gets baselines
    *  基线信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterBaselineResponseInfo[]|null
    */
    public function getBaselines()
    {
        return $this->container['baselines'];
    }

    /**
    * Sets baselines
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterBaselineResponseInfo[]|null $baselines 基线信息
    *
    * @return $this
    */
    public function setBaselines($baselines)
    {
        $this->container['baselines'] = $baselines;
        return $this;
    }

    /**
    * Gets malwares
    *  恶意文件信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterMalwareResponseInfo[]|null
    */
    public function getMalwares()
    {
        return $this->container['malwares'];
    }

    /**
    * Sets malwares
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterMalwareResponseInfo[]|null $malwares 恶意文件信息
    *
    * @return $this
    */
    public function setMalwares($malwares)
    {
        $this->container['malwares'] = $malwares;
        return $this;
    }

    /**
    * Gets images
    *  镜像信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterImageResponseInfo[]|null
    */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
    * Sets images
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterImageResponseInfo[]|null $images 镜像信息
    *
    * @return $this
    */
    public function setImages($images)
    {
        $this->container['images'] = $images;
        return $this;
    }

    /**
    * Gets clusters
    *  集群信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterItemResponseInfo[]|null
    */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
    * Sets clusters
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterItemResponseInfo[]|null $clusters 集群信息
    *
    * @return $this
    */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;
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

