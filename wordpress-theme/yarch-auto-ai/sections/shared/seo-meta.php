<?php
$seoTitle = $seoTitle ?? ($pageTitle ?? '');
$seoDescription = $seoDescription ?? ($pageDescription ?? '');
$seoCanonical = $seoCanonical ?? ($canonicalUrl ?? '');
$seoRobots = $seoRobots ?? 'index, follow';
$seoOgType = $seoOgType ?? 'website';
$seoLocale = $seoLocale ?? 'ru_RU';
$seoTwitterCard = $seoTwitterCard ?? 'summary_large_image';
$defaultOgImage = function_exists('yarch_asset_url')
  ? yarch_asset_url('sections/cases/images/kia_k5.jpg')
  : '';
$seoImage = $seoImage ?? ($ogImageUrl ?? $defaultOgImage);
?>
<title><?php echo htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($seoDescription, ENT_QUOTES, 'UTF-8'); ?>" />
<meta name="robots" content="<?php echo htmlspecialchars($seoRobots, ENT_QUOTES, 'UTF-8'); ?>" />
<link rel="canonical" href="<?php echo htmlspecialchars($seoCanonical, ENT_QUOTES, 'UTF-8'); ?>" />

<meta property="og:type" content="<?php echo htmlspecialchars($seoOgType, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:locale" content="<?php echo htmlspecialchars($seoLocale, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:description" content="<?php echo htmlspecialchars($seoDescription, ENT_QUOTES, 'UTF-8'); ?>" />
<meta property="og:url" content="<?php echo htmlspecialchars($seoCanonical, ENT_QUOTES, 'UTF-8'); ?>" />
<?php if (!empty($seoImage)): ?>
  <meta property="og:image" content="<?php echo htmlspecialchars($seoImage, ENT_QUOTES, 'UTF-8'); ?>" />
<?php endif; ?>

<meta name="twitter:card" content="<?php echo htmlspecialchars($seoTwitterCard, ENT_QUOTES, 'UTF-8'); ?>" />
<meta name="twitter:title" content="<?php echo htmlspecialchars($seoTitle, ENT_QUOTES, 'UTF-8'); ?>" />
<meta name="twitter:description" content="<?php echo htmlspecialchars($seoDescription, ENT_QUOTES, 'UTF-8'); ?>" />
<?php if (!empty($seoImage)): ?>
  <meta name="twitter:image" content="<?php echo htmlspecialchars($seoImage, ENT_QUOTES, 'UTF-8'); ?>" />
<?php endif; ?>
